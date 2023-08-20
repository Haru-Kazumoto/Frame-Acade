<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Repository\Interfaces\{
    FrameworkRepositoryInterfaces,
    UserRepositoryInterfaces,
    CertificationRepositoryInterfaces,
    ModuleRepositoryInterfaces,
    SubModuleRepositoryInterfaces
};
use App\Repository\{
    UserRepository,
    FrameworkRepository,
    CertificationRepository,
    ModuleRepository,
    SubModuleRepository
};

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(UserRepositoryInterfaces::class, UserRepository::class);
        $this->app->bind(FrameworkRepositoryInterfaces::class, FrameworkRepository::class);
        $this->app->bind(CertificationRepositoryInterfaces::class, CertificationRepository::class);
        $this->app->bind(ModuleRepositoryInterfaces::class, ModuleRepository::class);
        $this->app->bind(SubModuleRepositoryInterfaces::class, SubModuleRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
