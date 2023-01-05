<?php

declare(strict_types=1);

namespace Oneduo\LaravelHumanKeys\Tests;

use Oneduo\LaravelHumanKeys\HumanModelKeysServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app): array
    {
        return [
            HumanModelKeysServiceProvider::class,
        ];
    }
}
