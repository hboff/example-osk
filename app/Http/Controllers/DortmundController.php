<?php

namespace App\Http\Controllers;

use App\Models\Dortmund;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DortmundController extends Controller
{
    

    public function index()
    {
        return view('welcome');
    }

   // public function index()
   // {
   //     $localort = DB::table('orteat')
   //             ->whereBetween('breitengrad', [47.5, 48.1])
   //             ->whereBetween('laengengrad', [16.5, 48.1])
   //             ->get(); 
   //             
   //     return view('welcome', ['localort' => $localort]);
   // }

}
