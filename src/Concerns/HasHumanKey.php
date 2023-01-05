<?php

declare(strict_types=1);

namespace Oneduo\LaravelHumanKeys\Concerns;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Oneduo\LaravelHumanKeys\Contracts\HumanModelKeys;

trait HasHumanKey
{
    public static function bootHasHumanKey(): void
    {
        static::creating(static function (Model $model) {
            if (empty($model->getKey())) {
                $model->setAttribute(
                    key: $model->getKeyName(),
                    value: app(HumanModelKeys::class)->generateHumanKey(static::getKeyPrefix()),
                );
            }
        });
    }

    public function getKeyType(): string
    {
        return 'string';
    }

    public function getIncrementing(): bool
    {
        return false;
    }

    public static function getKeyPrefix(): string
    {
        return Str::of(static::class)
            ->classBasename()
            ->lower()
            ->limit(3, '')
            ->toString();
    }
}
