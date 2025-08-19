<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Vite;

class AppServiceProvider extends ServiceProvider
{
    /**
     * The path to the home route for your application.
     *
     * @var string
     */
    public const HOME = '/login'; // Ubah rute ini sesuai dengan yang Anda inginkan

    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Konfigurasi ini memberitahu Laravel di mana folder 'build' berada.
        Vite::useBuildDirectory('build');
    }
}