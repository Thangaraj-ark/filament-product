<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    use HasFactory;

    public $fillable = ['image', 'product_id', 'status']; 

    public function products() {
        return $this->hasMany(Product::class);
    }
}
