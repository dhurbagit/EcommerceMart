<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['product_name', 
    'unit', 'price', 
    'refundable', 
    'description', 
    'featured', 'today_deal', 
    'flash_title', 'discount', 
    'discount_type', 'status',
    'cat_id', 'sub_cat_id', 
    'brand_id', 'tag_id', 
    'image_id'];
    
    protected $table = 'products';
    // public $timestamps = false;

    public function Image(){
        return $this->belongsTo(Image::class,'image_id','id');
    }


}
