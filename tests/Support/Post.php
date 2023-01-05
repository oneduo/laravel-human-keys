<?php

declare(strict_types=1);

namespace Oneduo\LaravelHumanKeys\Tests\Support;

use Illuminate\Database\Eloquent\Model;
use Oneduo\LaravelHumanKeys\Concerns\HasHumanKey;

class Post extends Model
{
    use HasHumanKey;
}
