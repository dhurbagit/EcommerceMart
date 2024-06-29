<?php
 namespace App\Models;

 use Illuminate\Database\Eloquent\Factories\HasFactory;
 use Illuminate\Database\Eloquent\Model;
 
 class Gallery extends Model
 {
     use HasFactory;
 
     protected $fillable = ['g_image', 'image_id'];
     protected $table = 'galleries';
 
     public function thumbnailImage()
     {
         return $this->belongsTo(Image::class, 'image_id', 'id');
     }
 }
 