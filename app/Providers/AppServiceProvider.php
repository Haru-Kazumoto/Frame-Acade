<?php

namespace App\Providers;

use App\Http\Repository\Interfaces\CoursesRepositoryInterfaces;
use App\Http\Repository\CoursesRepository;
use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(CoursesRepositoryInterfaces::class, CoursesRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
