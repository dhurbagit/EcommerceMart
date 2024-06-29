<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['category_title', 'category_id', 'image', 'icon', 'description', 'sub_title', 'slug'];

    protected $table = 'categories';

    public function subCategory()
    {
        return $this->hasMany(Category::class, 'category_id');
    }

    public function parent()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public static function childrens($parentId)
    {
        $arr = [$parentId];
        $child = self::find($parentId);
        if ($child->subCategory) {
            foreach ($child->subCategory as $subcat) {
                array_push($arr, $subcat->id);
                foreach ($subcat->subCategory as $subcat_s) {
                    array_push($arr, $subcat_s->id);
                }
            }
        }

        $transformedArray = array_map(function ($item) {
            return (string)$item;
        }, $arr);
        return $transformedArray;
    }
}
