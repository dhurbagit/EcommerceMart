<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $fillable = ['b_title', 'slug'];

    protected $table = 'brands';

    public function ProductBrand(){
        return $this->hasMany(Product::class, 'brand_id');
    }
}
