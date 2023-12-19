<?php

namespace Aweram\TraitsHelpers;

use Aweram\TraitsHelpers\Helpers\DateHelper;
use Illuminate\Support\ServiceProvider;

class TraitsHelpersServiceProvider extends ServiceProvider
{
    public function boot(): void
    {

    }

    public function register(): void
    {
        $this->app->bind("date_helper", function () {
            return app(DateHelper::class);
        });
    }
}
