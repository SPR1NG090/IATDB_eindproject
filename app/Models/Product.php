<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \App\Models\User;
use \App\Models\Lent;
use Auth;
class Product extends Model
{
    protected $table = "product";
    public $timestamps = false;
    
    public function kindModel(){
        return $this->belongsTo("\App\Models\KindOfProduct","kind","kind");
    }

    public function getOwner() {
        return $this->belongsTo(User::class, 'ownerID', 'id');
    }

    public function checkIfAvailable(){
        $product = Lent::where('productID', '=', $this->id)->first();

        if ($product == null) return true;
        else if ($product->lent== false) return true;
        return false;
    }
    
    public function sendback()
    {
        Lent::where([
            ['userID', '=', Auth::user()->id],
            ['productID', '=', $this->id],
        ])->update([
            'lent' => false
        ]);
    }

    public function borrow(){
        Lent::updateOrCreate(
            ['userID' => Auth::user()->id, 'productID' => $this->id],
            ['lent' => true],
        );    
    }

}
