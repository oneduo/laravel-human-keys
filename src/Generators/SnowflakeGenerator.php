<?php

declare(strict_types=1);

namespace Oneduo\LaravelHumanKeys\Generators;

use Godruoyi\Snowflake\Snowflake;
use Oneduo\LaravelHumanKeys\Contracts\Generator;

class SnowflakeGenerator implements Generator
{
    public function generate(?string $prefix = null): string
    {
        $parts = [
            $prefix,
            (new Snowflake())->id(),
        ];

        return implode('_', $parts);
    }
}
