<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Gallery extends Model 
{
    use HasFactory;
    
    protected $fillable = ['image', 'type', 'link'];

    public function getVideo()
    {
        return $this->where('type', '1')->get();
    }

    public function getImage()
    {
        return $this->where('type', '0')->get();
    }

}
