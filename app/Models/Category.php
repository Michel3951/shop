<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = [
        'name',
        'description',
        'hidden',
        'image',
        'slug'
    ];

    public function seo()
    {
        return $this->hasOne(CategorySeo::class);
    }

    public function products()
    {
        return $this->hasManyThrough(Product::class, ProductCategory::class, 'product_id', 'id', 'id', 'category_id');
    }
}
