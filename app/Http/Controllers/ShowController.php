<?php

namespace App\Http\Controllers;

use App\Models\Brewery;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    //creamos una funcion public para retornar nuestra página.
    public function todas(){
        return view("cervecerias");
    }


}
