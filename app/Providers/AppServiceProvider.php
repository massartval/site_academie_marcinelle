<?php

namespace App\Providers;

use App\Models\Group;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /*
        // Option 1 : share with all views
        View::share('groups', Group::get());
        // Option 2 : closure-based view composer
        View::composer(['home', 'groups.index'], function($view) {
            $view->with('groups', Group::orderBy('course_id')->get());
        });
        // Option 3 : class-based view composer
        ----
        // Render only user related groups in dashboard
        View::composer(['dashboard'], function($view) {
            $myGroups = auth()->user()->profile->isStudentInGroup()->orderBy('course_id')->get();
            $view->with('groups', $myGroups);
        });
        */
    }
}
