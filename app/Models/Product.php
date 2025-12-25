<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;


class Product extends Model implements TranslatableContract
{
    use Translatable;
    use HasFactory;
    public $translatedAttributes = ['title', 'description','short_description','field','country'];
    protected $fillable = ['image','brand_id','category_id','url','color1','color2','project_logo','technology','is_active','sort'];


    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function scopeActive($query)
    {
         $query->where('is_active', '1');
    }


    public function brand(){
        return $this->belongsTo(Brand::class);
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class, 'product_id');
    }

    public function scopeFilter($query)
    {
        if (request()->category_id) {

            $query->where('category_id', request()->category_id);
        }
    }
}

