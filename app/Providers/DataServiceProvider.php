<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Http\Controllers\HeaderController;
use Carbon\Carbon;

class DataServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('partials.header', function ($view) {
            $formattedDate = Carbon::now()->format('l, F j, Y'); // Get the current formatted date

            $view
                ->with('formattedDate', $formattedDate);
        });
    }
}
