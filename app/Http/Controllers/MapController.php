<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MapController extends Controller
{
    public function show(){
           $characters = [
             'Tesco Express' =>'Vegetable and meat available,51.5,0.1278',
             'Sainsbury Local' => 'Vegtables very cheap in bulk,51.5054,0.0235',
           ];

           return view('welcome')->withCharacters($characters);
    }
}
