<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'imageOne',
        'imageTwo',
        'imageThree',
        'product_title',
        'product_amount',
        'product_desc',
        'user_id',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
