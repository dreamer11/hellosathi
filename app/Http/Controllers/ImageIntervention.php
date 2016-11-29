<?php

namespace App\Http\Controllers;

use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;

class ImageIntervention extends Controller

{
    public function index()
    {

        $img = Image::make(public_path('/image/neko.jpg'))->resize(40, 30);
        return $img->response('jpg');

    }

    public function rotate()
    {

        $img = Image::make(public_path('/image/neko.jpg'));

// rotate image 45 degrees clockwise
        $img->rotate(-45);

    }

    function generateThumb( $image ){
        $thumb = \Image::make( public_path( 'image/' . $image ) );
        $thumb->resize( 40, 30 );
        return $thumb->response();
    }

  function generateImages( $image,$width=100,$height =100 ){
        $images = \Image::make( public_path( 'image/' . $image ) );
        $images->resize( $width, $height );
        return $images->response();
    }


}
