<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Video extends Model implements TranslatableContract
{
    use Translatable;
    use HasFactory;

    public $translatedAttributes = ['title', 'description', 'short_description'];
    protected $fillable = ['video_category_id', 'time_per_minutes', 'slug', 'master_image', 'embeded_text', 'file'];

    public function category()
    {
        return $this->belongsTo(VideoCategory::class, 'video_category_id');
    }
}