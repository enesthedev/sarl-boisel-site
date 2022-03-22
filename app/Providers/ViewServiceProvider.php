<?php

namespace App\Providers;

use App\View\Composers\ApplicationPropertiesComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap View services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('*', ApplicationPropertiesComposer::class);
    }
}
