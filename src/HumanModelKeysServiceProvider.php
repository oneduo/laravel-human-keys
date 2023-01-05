<?php

declare(strict_types=1);

namespace Oneduo\LaravelHumanKeys;

use Oneduo\LaravelHumanKeys\Contracts\HumanModelKeys as HumanModelKeysContract;
use Oneduo\LaravelHumanKeys\Services\HumanModelKeys;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class HumanModelKeysServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('human-keys')
            ->hasConfigFile();
    }

    public function bootingPackage(): void
    {
        app()->singleton(HumanModelKeysContract::class, HumanModelKeys::class);
    }
}
