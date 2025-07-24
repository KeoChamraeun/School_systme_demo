<?php

namespace App\Providers;

use Carbon\Carbon;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        if (!class_exists('MyCarbon')) {
            class_alias(Carbon::class, 'MyCarbon');
        }
    }
}
