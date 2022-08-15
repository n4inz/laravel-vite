<?php

namespace App\Http\Traits;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;

trait HttpGuzzle
{
    public function base_url($uri)
    {
        // https://api.calendly.com
        return new Client([
            'base_uri' => $uri,
        ]);
    }
    public function get($uri, $end_point , $request)
    {
       $get = $this->base_url($uri);
        $headers = [
            'Authorization' => 'Bearer ' . $request->calendly,        
            'Accept'        => 'application/json',
        ];
        $response =  $get->request(
            'GET', 
            $end_point,
            [
                'headers' => $headers
            ]
        
        );

        return $response;
    }
    
    public function getWithParams($token , $url, $params = null)
    {
        $response = Http::withToken($token)->get($url,$params);

        return $response;
    }

}