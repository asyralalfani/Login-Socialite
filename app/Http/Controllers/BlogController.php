<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function index(){
        return view('index');
    }
    public function dna(){
        return view('dna');
    }   
    public function investor(){
        return view('investor');
    }  
 }
