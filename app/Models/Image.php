<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $fillable = ['t_image'];

    protected $table = 'images';
    // public $timestamps = false;


    protected function productImage()
    {
        return $this->hasOne(Product::class, 'image_id');
    }


    public function galleryimage()
    {
        return $this->hasMany(Gallery::class, 'image_id');
    }

}
