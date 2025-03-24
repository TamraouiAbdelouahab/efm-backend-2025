<?php

namespace Modules\PkgWidget\App\Providers;

use Illuminate\Support\ServiceProvider;

class WidgetServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Charger les vues
        $this->loadViewsFrom(__DIR__.'/../../Views', 'Widget');
    }

    public function register()
    {
        // Enregistrer d'autres services si nécessaire
    }
}
