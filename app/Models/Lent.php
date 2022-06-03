<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Lent extends Model
{
    use HasFactory;
    protected $table = 'lent_items';
    public $timestamps = false;

    protected $fillable = [
        'userID',
        'productID',
        'lent',
    ];
    public function product() {
        return $this->belongsTo(Product::class, 'productID', 'id');
    }
}
