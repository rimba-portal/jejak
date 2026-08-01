<?php

declare(strict_types=1);

namespace Rimba\Trail;

use Rimba\Base\Services\BitesServiceProvider;

class TrailServiceProvider extends BitesServiceProvider
{
    protected function bootPackage(): void
    {
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        //
    }

    protected function registerPackage(): void
    {
        //
    }
}
