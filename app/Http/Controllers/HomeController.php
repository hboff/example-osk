<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
 class HomeController extends Controller
{
        private function getLocalort($domain)
    {
        switch ($domain) {
            case 'immobilienbewertung-duisburg.com':
                return DB::table('orteat')
                    ->whereBetween('breitengrad', [47.5, 48.1])
                    ->whereBetween('laengengrad', [16.5, 48.1])
                    ->get();
            case 'immobilienbewertung-bochum.com':
                return DB::table('orteat')
                    ->whereBetween('breitengrad', [41.5, 48.1])
                    ->whereBetween('laengengrad', [12.5, 48.1])
                    ->get();
        }
    }
    public function index($domain)
    {
        $localort = $this->getLocalort($domain);
        
        return view('welcome', ['localort' => $localort]);
    }
    
    public function privacyPolicy($domain)
    {
        $localort = $this->getLocalort($domain);
        
        return view('datenschutzerklaerung', ['localort' => $localort]);
    }
    
    public function residentialProperties($domain)
    {
        $localort = $this->getLocalort($domain);
        
        return view('wohnimmobilien', ['localort' => $localort]);
    }
    
    public function marketValueProcedure($domain)
    {
        $localort = $this->getLocalort($domain);
        
        return view('verkehrswertverfahren', ['localort' => $localort]);
    }
    
    public function specialProperties($domain)
    {
        $localort = $this->getLocalort($domain);
        
        return view('sonderimmobilien', ['localort' => $localort]);
    }
    

}

