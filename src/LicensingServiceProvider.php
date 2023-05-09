<?php
namespace Packages\Licensing;
use Illuminate\Support\ServiceProvider;
use Packages\Licensing\Classes\License;

class LicensingServiceProvider extends ServiceProvider
{
    public function boot()
    {
//        $this->publishes(
//            [
//                __DIR__.'/../config/vandar.php'=>config_path('vandar.php')
//            ]
//        );
    }

    public function register()
    {
        $this->app->singleton(License::class,function (){
            return new License();
        });
    }
}
