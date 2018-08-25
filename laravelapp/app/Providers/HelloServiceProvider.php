<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;

// ↓ ※ Validator::extend を使用する場合は
//     Illuminate\Support\Facades\Validator を使用する
//     Illuminate\Validation\Validator は使用しない(できない)

//use Illuminate\Validation\Validator;
use App\Http\Validators\HelloValidator;

class HelloServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Validator::extend('hello', function ($attribute, $value, $parameters, $validator)
        {
            return $value % 2 == 0;
        });
    }
}
