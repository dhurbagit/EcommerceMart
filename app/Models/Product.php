<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'unit',
        'price',
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
        'image_id',
        'slug',
        'sales',
        'color',
        'rating'
    ];

    protected $table = 'products';

    public function thumbImage()
    {
        return $this->belongsTo(Image::class, 'image_id', 'id');
    }
}
