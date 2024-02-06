<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['product_name', 
    'unit', 'price', 
    'refundable', 
    'description', 
    'featured', 
    'today_deal', 
    'flash_title', 
    'discount', 
    'discount_type', 
    'status',
    'category_key', 
    'tag_key', 
    'brand_id', 
    'image_id'];
    
    protected $table = 'products';
    // public $timestamps = false;

    public function thumbImage(){
        return $this->belongsTo(Image::class,'image_id','id');
    }

    // protected function tag_key(): Attribute {
    //     return Attribute::make(
    //         get: fn ($value) => json_decode($value, true),
    //         set: fn ($value) => json_encode($value),
    //     );
    // }


}
