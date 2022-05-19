<?php

namespace App\Providers;

use App\Policies\PostPolicy;
use App\Post;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */

    protected $policies = [
        // Post::class => PostPolicy::class,
        'App\Post' => 'App\Policies\PostPolicy',
        // 'App\Order' => 'App\Policies\OrderPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        /*
        Gate::define('update-post', function ($user, $post) {
            return $user->id == $post->user_id;
        });
        //OR
        Gate::define('update-post', 'App\Policies\PostPolicy@update');
        */
        // Gate::define('isAdmin', function($user) {
        //     dd(13123213);
        //     return $user->role == 'admin';
        //  });
        Gate::define('update', 'App\Policies\OrderPolicy@update');
    }
}
