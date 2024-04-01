<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SoccerController extends Controller
{
    //
    public function soccerCall ($operacion = 'fixtures', $seasson = '2023', $team = '4907') {
        $headers = [
            'X-RapidAPI-Key'=> env('API_FOOTBALL_KEY'),
            'X-RapidAPI-Host' => env('API_FOOTBALL_HOST')
        ];
        $params = [
            'season' => $seasson,
            'team' => $team,
            'next' => 3
        ];       

        $response = Http::withHeaders ($headers)->get(env('API_FOOTBALL_URL') . $operacion, $params);
        $body = $response->getBody();

        $data = json_decode($body, true);

        return  $data;
        
    }
    public function index () {
        $data = $this->soccerCall ();
        return view ('soccer.index', compact ('data'));
    }
}
