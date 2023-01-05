<?php

declare(strict_types=1);

namespace Oneduo\LaravelHumanKeys\Services;

use Oneduo\LaravelHumanKeys\Contracts\HumanModelKeys as HumanKeysContract;
use Oneduo\LaravelHumanKeys\Factories\GeneratorFactory;

class HumanModelKeys implements HumanKeysContract
{
    public function generateHumanKey(?string $prefix = null): string
    {
        $generator = config('human-keys.generator');

        return GeneratorFactory::make($generator)->generate($prefix);
    }
}
