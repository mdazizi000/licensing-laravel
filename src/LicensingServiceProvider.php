<?php
namespace Packages\Licensing;
use Illuminate\Support\ServiceProvider;
use Packages\Licensing\Classes\License;

class LicensingServiceProvider extends ServiceProvider
{
    public function boot()
    {
        checker()->get($_SERVER['HTTP_HOST']);
    }

    public function register()
    {
        $this->app->singleton(License::class,function (){
            return new License();
        });
    }
}
