<?php

declare(strict_types=1);

namespace Oneduo\LaravelHumanKeys\Contracts;

interface Generator
{
    public function generate(?string $prefix = null): string;
}
