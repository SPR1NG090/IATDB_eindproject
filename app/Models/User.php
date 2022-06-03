<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use \App\Models\Product;
use \App\Models\Review;
use Auth;
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    public function writeReview()
    {
        if (!Auth::check()) return true;

        $items = Auth::user()->getBorrowed(false)->get();
        $filteredItems = $items->filter(function ($value, $key) {
            return $value->product->ownerID == $this->id;
        });


        // of het profiel het huidige profiel is
        if (Auth::user()->id == $this->id) return false;

        // eerder geleend?
        else if ($filteredItems->count() > 0) return true;

        return false;
    }
    public function getBorrowed($applyFilter = true) {

        $items = $this->hasMany(Lent::class, 'userID', 'id');

        if ($applyFilter) { return $items->where('lent', '=', '1'); }
        return $items;
    }

    
    public function isAdmin() {
        $isAdmin = $this->permissions == 'Admin' ? true : false;
        return $isAdmin;
    }

    protected $fillable = [
        'name',
        'email',
        'password',
        'permissions',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'permissions',
        'blocked',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getItems() {
        return $this->hasMany(Product::class, 'ownerID', 'id');
    }
    public function reviews() {
        return $this->hasMany(Review::class, 'userID', 'id');
    }
}
