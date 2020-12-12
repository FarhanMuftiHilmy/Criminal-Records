<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use App\Criminal;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    //fungsi home
    public function welcome(){
        return view('welcome');
    }

    public function instalasi_laravel(){
        return view('instalasi_laravel');
    }

    public function about(){
        return view('about');
    }  

    public function help(){
        return view('help');
    }  

    public function criminal_records(){
        $criminal = Criminal::all();
        return view('criminals', compact('criminal'));
    }
}
