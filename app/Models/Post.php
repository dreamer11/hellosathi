<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable=['post','image'];


    protected $appends = ['images'];


    function user(){
        return $this->belongsTo(User::class);
    }

    function getImagesAttribute(){

        return route('post.images',[$this->image]);
    }

    function getImage( $width = 100, $height = 100) {
        return route('post.images',[$this->image, $width,$height ]);
    }
}
