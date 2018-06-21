<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Intervention\Image\Facades\Image as Image;

class QRController extends Controller
{

    public function get($data){
        try {

            $image=  file_get_contents('http://qrickit.com/api/qr.php?d=asdasd');
            return Image::make($image)->response()->header('file_exists','true');

        } catch (RequestException $re) {
            var_dump($re->getMessage());
            //For handling exception
        }
       // $uri = $request->path();


    }
    //
}
