<?php

declare(strict_types=1);

namespace Oneduo\LaravelHumanKeys\Contracts;

interface HumanModelKeys
{
    public function generateHumanKey(): string;
}
