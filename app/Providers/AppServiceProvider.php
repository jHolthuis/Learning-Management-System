<?php

namespace App\Providers;

use App\Policies\LessonPolicy;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{
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
        if ($this->app->environment('local')) {
            Mail::alwaysTo('info@hacklab.frl');
        }

        Gate::define('update-lesson', [LessonPolicy::class, 'update']);
    }
}
