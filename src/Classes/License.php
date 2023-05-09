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
        $response = Http::get('https://rahatbet.com/api/license/managment', [
            'domain' => $domain,
            'license' => 'kgbgbhkgbhkbkk',
        ]);
            if (!$response->json(['success']) == true) {
                return view('welcome');
        } else {
            return true;
        }
    }
}
