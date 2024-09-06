<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Employee\EmployeeRepository;
use App\Repositories\Employee\EmployeeRepositoryImplement;
use App\Services\Employee\EmployeeService;
use App\Services\Employee\EmployeeServiceImplement;
use App\Repositories\Office\OfficeRepository;
use App\Repositories\Office\OfficeRepositoryImplement;
use App\Services\Office\OfficeService;
use App\Services\Office\OfficeServiceImplement;
use App\Repositories\Project\ProjectRepository;
use App\Repositories\Project\ProjectRepositoryImplement;
use App\Services\Project\ProjectService;
use App\Services\Project\ProjectServiceImplement;
use App\Services\ProjectEmployee\ProjectEmployeeService;
use App\Services\ProjectEmployee\ProjectEmployeeServiceImplement;
use App\Repositories\ProjectEmployee\ProjectEmployeeRepository;
use App\Repositories\ProjectEmployee\ProjectEmployeeRepositoryImplement;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register()
    {
        // Employee bindings
        $this->app->bind(EmployeeRepository::class, EmployeeRepositoryImplement::class);
        $this->app->bind(EmployeeService::class, EmployeeServiceImplement::class);
        
        // Office bindings
        $this->app->bind(OfficeRepository::class, OfficeRepositoryImplement::class);
        $this->app->bind(OfficeService::class, OfficeServiceImplement::class);
        
       
        $this->app->bind(ProjectRepository::class, ProjectRepositoryImplement::class);
        $this->app->bind(ProjectService::class, ProjectServiceImplement::class);
        
      
        $this->app->bind(ProjectEmployeeRepository::class, ProjectEmployeeRepositoryImplement::class);
        $this->app->bind(ProjectEmployeeService::class, ProjectEmployeeServiceImplement::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
