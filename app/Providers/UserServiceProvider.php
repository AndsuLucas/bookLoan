<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\User;
use Illuminate\Contracts\Support\DeferrableProvider;
use App\Domain\Repositories\User\UserRepositoryAbstract;
use App\Domain\Adapters\DataManager\User\Laravel\UserDataManager;

class UserServiceProvider extends ServiceProvider implements DeferrableProvider
{
    public function register()
    {   

        $this->app->bind(UserRepositoryAbstract::class, function($app){
            $userDataManager = $app->make(UserDataManager::class);
            return new \App\Domain\Repositories\User\UserRepository($userDataManager);
        });
    }

    public function provides()
    {
        return [UserRepositoryAbstract::class];
    }    
}
