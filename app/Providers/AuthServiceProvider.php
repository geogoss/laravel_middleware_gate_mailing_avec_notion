<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('member', function ($user, $article) {
            return $user->id == $article->user_id 
            || $user->role->role == 'admin' 
            || $user->role->role == 'webmaster';
        });

        Gate::define('redac', function ($user, $article) {
            return $user->id == $article->user_id && $user->role->role == 'redacteur' 
            || $user->role->role == 'admin' 
            || $user->role->role == 'webmaster';
        });

        Gate::define('admin', function ($user, $item) {
            return $user->role_id == 1 && $item->role_id != 1 || $user->role_id == 3 && $item->role_id != 3 && $item->role_id != 1;
        });

       
    }
}
