<?php

declare(strict_types=1);

namespace Oneduo\LaravelHumanKeys\Factories;

use InvalidArgumentException;
use Oneduo\LaravelHumanKeys\Contracts\Generator;
use Oneduo\LaravelHumanKeys\Generators\KSUIDGenerator;
use Oneduo\LaravelHumanKeys\Generators\SnowflakeGenerator;

class GeneratorFactory
{
    public function __construct(public string $generator)
    {
    }

    public static function make(string $generator): Generator
    {
        return (new self($generator))->generator();
    }

    public function generator(): Generator
    {
        if (class_exists($this->generator) && $this->generator instanceof Generator) {
            return new $this->generator();
        }

        return match ($this->generator) {
            'ksuid' => new KSUIDGenerator(),
            'snowflake' => new SnowflakeGenerator(),
            default => throw new InvalidArgumentException("Invalid generator provided [$this->generator]"),
        };
    }
}
