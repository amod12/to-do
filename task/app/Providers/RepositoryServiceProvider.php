<?php

namespace App\Providers;

use App\Repositories\TodoRepositoryInterface;
use App\Repositories\TodoRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(TodoRepositoryInterface::class, TodoRepository::class);
    }
}
