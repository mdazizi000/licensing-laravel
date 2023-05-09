<?php
namespace Packages\Licensing;
use Illuminate\Support\ServiceProvider;
use Packages\Licensing\Classes\License;

class LicensingServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $domain = parse_url(url('/'), PHP_URL_HOST);

        checker()->get($domain;
    }

    public function register()
    {
        $this->app->singleton(License::class,function (){
            return new License();
        });
    }
}
