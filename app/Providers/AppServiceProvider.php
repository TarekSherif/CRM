<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;



class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        view()->composer('*', function($view) {
            $view_name=$view->getName();
            $jtable=true;
             $data =
              array('view_name' => $view_name , 
                    'jtable'=> $jtable   );
            view()->share( $data);
        });
    }
   /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
