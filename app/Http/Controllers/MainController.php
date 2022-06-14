<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class MainController extends Controller
{
    public function index(){
        return view('welcome');
    } 

    public function post(){
        return response()->json(['first_test' => 'ok']);
    }

    public function put(){
        return response()->json(['put' => 'ok']);
    }
}
