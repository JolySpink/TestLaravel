<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use App\Http\Requests\ImageRequest;
use http\Env\Request;
use Illuminate\Support\Facades\Storage;

class PhotoRequestController extends Controller
{
    public function index(ImageRequest $request)
    {
        $image = $request->validated();
        $name = $request->file('image')->store('');
        $path = 'storage/' . $name;
        $maxRGB = $this->maxRGB($path);
        $this->stamp($path,$maxRGB);
        return $this->stamp($path,$maxRGB);

    }

    private function maxRGB($path)
    {

        $info = getimagesize($path);
        switch ($info[2]) {
            case 1:
                $img = imageCreateFromGif($path);
                break;
            case 2:
                $img = imageCreateFromJpeg($path);
                break;
            case 3:
                $img = imageCreateFromPng($path);
                break;
        }

        $width = ImageSX($img);
        $height = ImageSY($img);

        $thumb = imagecreatetruecolor(1, 1);
        imagecopyresampled($thumb, $img, 0, 0, 0, 0, 1, 1, $width, $height);

        $rgb = imagecolorat($thumb, 0, 0);
        $r = ($rgb >> 16) & 0xFF;
        $g = ($rgb >> 8) & 0xFF;
        $b = $rgb & 0xFF;
        $RGB = [
            'r' => $r,
            'g' => $g,
            'b' => $b,

        ];
        $maxRGB = array_keys($RGB, max($RGB));
        return $maxRGB;
    }

    private function stamp($path,$maxRGB)
    {

if ($maxRGB[0]=='r')
{
    $stamp = imagecreatefrompng('img/black.png');
}
elseif ($maxRGB[0]=='g')
{
    $stamp = imagecreatefrompng('img/red.png');
}
else{
    $stamp = imagecreatefrompng('img/yellow.png');
}

        $im = imagecreatefromjpeg($path);


        $marge_right = 10;
        $marge_bottom = 10;
        $sx = imagesx($stamp);
        $sy = imagesy($stamp);


        imagecopy($im, $stamp, imagesx($im) - $sx - $marge_right, imagesy($im) - $sy - $marge_bottom, 0, 0, imagesx($stamp), imagesy($stamp));


        header('Content-type: image/png');

       $png= imagepng($im);
     return $png;



    }

}
