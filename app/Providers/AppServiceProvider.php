<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $arrRepositories = [
            'User',
        ];

        foreach($arrRepositories AS $repository) {
            $this->app->bind(
                'App\Repositories\\' . $repository. 'Repository\\' . $repository . 'RepositoryInterface',
                'App\Repositories\\' . $repository. 'Repository\\' . $repository . 'Repository'
            );
        }
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
