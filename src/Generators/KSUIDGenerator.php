<?php

declare(strict_types=1);

namespace Oneduo\LaravelHumanKeys\Generators;

use Oneduo\LaravelHumanKeys\Contracts\Generator;
use Tuupola\KsuidFactory as Ksuid;

class KSUIDGenerator implements Generator
{
    public function generate(?string $prefix = null): string
    {
        $parts = [
            $prefix,
            Ksuid::create()->string(),
        ];

        return implode('_', $parts);
    }
}
