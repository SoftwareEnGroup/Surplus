<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MapController extends Controller
{
    public function show(){
           $characters = [
             'Tesco' =>'Vegetable and meat available,51.5,0.1278',
             'Sainsbury' => 'Vegetables very cheap in bulk,51.5054,0.0235',
           ];

           return view('welcome')->withCharacters($characters);
    }
}
