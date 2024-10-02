<?php

namespace amazeeio\LagoonLogs;

use Illuminate\Support\ServiceProvider;

class LagoonLogsServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->mergeConfigFrom(
            __DIR__.'/config/logging.php', 'logging'
        );
    }
}
