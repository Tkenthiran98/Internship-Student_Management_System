<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class StudentServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('student', function () {
            return new \App\Services\StudentService;
        });
    }
}
