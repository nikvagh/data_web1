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

        // Validator::extend('Wallet_Balance', function ($attribute, $value, $parameters, $validator) {
        //       $inputs = $validator->getData();
        //       $phone = $inputs['Payment_Meaning'];
        //      print_r($inputs);
        //      exit();
        //       $except_id = (!empty($parameters)) ? head($parameters) : null;

        //       $query = User::where('phone', $concatenated_number);
        //       if(!empty($except_id)) {
        //         $query->where('id', '<>', $except);
        //       }

        //       return $query->exists();
        // });

        $this->app['validator']->extend('wallet_balance', function ($attribute, $value, $parameters)
        {
            $inputs = $validator->getData();
            print_r($inputs);
            exit();

            foreach ($value as $v) {
                if (!is_int($v)) {
                    return false;
                }
            }
            return true;
        });

    }
}
