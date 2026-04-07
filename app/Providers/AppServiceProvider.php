<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Folder;
use App\Models\Person;
use App\Observers\FolderObserver;

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
        // $person = Person::first();
        // view()->share('person',$person);
    }
}
