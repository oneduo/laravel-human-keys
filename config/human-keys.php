<?php

declare(strict_types=1);

return [
    /*
    |--------------------------------------------------------------------------
    | Generator
    |--------------------------------------------------------------------------
    |
    | Used to define the generator to use for generating model keys.
    |
    | Supported:
    |   - ksuid (abc_p6UEyCc8D8ecLijAI5zVwOTP3D0)
    |   - snowflake (abc_1537200202186752)
    |
    | Default: ksuid
    |
    | Note: You may define your own generator by implementing the contract
    |       Oneduo\LaravelHumanKeys\Contracts\Generator and passing
    |       the class name to the generator config option.
    |
    |       See the example below:
    |       'generator' => \App\Services\MyGenerator::class
    */
    'generator' => 'ksuid',
];
