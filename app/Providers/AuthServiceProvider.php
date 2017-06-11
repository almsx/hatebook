<?php

namespace App\Providers;

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
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('update-post', function($user, $post) {
            //Regla generica
             return $user->id == $post->user_id;
            //Que el post le pertenezca al usuario
            //u que la hora actual sea mayor a 12 del dia
            //return ($user->id == $post->user_id &&
            //  \Carbon\Carbon::now()->hour() > 12);
        });

        Gate::define('delete-post', function($user, $post) {
            return $user->id == $post->user_id;
        });


        //
    }
}
