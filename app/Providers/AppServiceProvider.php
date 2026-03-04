<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
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
