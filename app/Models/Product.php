<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Product extends Model
{
    use HasFactory;
    use Sluggable;
    protected $table="products";
    protected $fillable=['product_slug','title', 'short_desc', 'description', 'cat_id','product_img','product_gallery','slug','status'];

    public function sluggable(): array
    {
        return [
            'product_slug' => [
                'source' => 'title'
            ]
        ];
    }

}
