<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register()
    {
        $this->app->bind(\App\Repositories\Employee\EmployeeRepository::class, \App\Repositories\Employee\EmployeeRepositoryImplement::class);
        $this->app->bind(\App\Services\Employee\EmployeeService::class, \App\Services\Employee\EmployeeServiceImplement::class);
    }
    

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
