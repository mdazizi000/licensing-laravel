<?php

namespace Packages\Licensing\Classes;

use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;

class License
{
    public static function use(): License
    {
        return new static();
    }



    protected function get(string $license): Response
    {
        $response = Http::get('http://127.0.0.1:8000/api/license/managment',[
            'license'=>$license
        ]);
        return $response->json();
    }
}
