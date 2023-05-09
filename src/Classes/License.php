<?php

namespace Packages\Licensing\Classes;

use Cryptommer\Smsir\Smsir;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;

class License
{
    public static function use(): License
    {
        return new static();
    }


    public function get(string $domain)
    {
        $response = Http::get('http://127.0.0.1:8000/api/license/managment', [
            'domain' => $domain,
            'license' => 'kgbgbhkgbhkbkk',
        ]);
            if (!$response->json(['success']) == true) {
                return redirect($response->json(['url']));
        } else {
            return true;
        }
    }
}
