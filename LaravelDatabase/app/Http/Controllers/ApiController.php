<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function index() 
    {
        $randomImages = Http::get('http://otcwebdev.net/apis/markleyapi.php');

        //return($randomImages);

        //json_decode converts the json into php object
        //return json_decode($randomImages);

        return view('index', [
            "dog" => json_decode($randomImages)
        ]);
    }
}
