<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Language;
class Post extends Model
{
    public function getLang()
    {
     return $this->hasMany('App\Models\Language','post_id');

    }  

    public function getImage()
    {
     return $this->hasMany('App\Models\Image','post_id');

    }  


}
