<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Validator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Schema::defaultStringLength(191);

        Validator::extend('wallet_balance', function ($attribute, $value, $parameters, $validator) {
              $inputs = $validator->getData();
              $Payment_Meaning = $inputs['Payment_Meaning'];
              $total = $inputs['total'];
             // print_r($total);
             if(substr($Payment_Meaning,0,6)=="Wallet")
             {
                // echo "string";
                  if (substr($Payment_Meaning,7) >= $total) {
                     return true;
                  }
                  else{
                        return false;
                  }  
             }
             else{
                 return true;
             }
             // exit();
             
        });

       

    }
}
