<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\URL;
use App\Models\User;

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
    public function boot()
    {
        // forced scheme to use https instead of http for railway deployment
        URL::forceScheme('https');
    
        // Gate for admin access (full access)
        Gate::define('admin-access', function (User $user) {
            return $user->role_id === 1; // role_id = 1 is for admin
        });
    
        // Gate for user access (limited access)
        Gate::define('user-access', function (User $user) {
            return $user->role_id === 2; // role_id = 2 is for registered users
        });
    
        // Combined gate for actions allowed by both admin and user
        Gate::define('admin-or-user', function (User $user) {
            return $user->role_id === 1 || $user->role_id === 2;
        });
    }
}
