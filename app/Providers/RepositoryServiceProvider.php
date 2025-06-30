<?php
namespace App\Providers;
use Illuminate\Support\ServiceProvider;
use App\Repositories\{LogRepositoryInterface, LogRepository};

class RepositoryServiceProvider extends ServiceProvider {
    public function register() {
        $this->app->bind(LogRepositoryInterface::class, LogRepository::class);
    }
    public function boot() {}
}