<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    protected $fillable = ['t_title','slug'];

    protected $table = 'tags';

    public function ProductTag(){
        return $this->hasMany(Product::class, 'tag_id');
    }
}
