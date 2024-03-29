<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['category_title', 'category_id', 'image', 'icon', 'description', 'sub_title','slug'];

    protected $table = 'categories';
    
    public function subCategory(){
        return $this->hasMany(Category::class, 'category_id');
    }
    
    public function subOfsubCategory(){
        return $this->hasMany(Category::class, 'category_id');
    }
    
}
