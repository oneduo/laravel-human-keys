<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Oneduo\LaravelHumanKeys\Tests\Support\Post;
use Tuupola\Ksuid;

beforeEach(function () {
    Schema::dropIfExists('posts');

    Schema::create('posts', static function (Blueprint $table) {
        $table->string('id')->primary();
        $table->timestamps();
    });
});

it('can generate skuid for a model', function () {
    config()->set('human-keys.generator', 'ksuid');

    $model = Post::query()->create();

    [$prefix, $id] = explode('_', $model->getKey());

    expect($prefix)
        ->toBe(Post::getKeyPrefix())
        ->and($id)
        ->toBeString()
        ->toHaveLength(Ksuid::ENCODED_SIZE);
});

it('can generate snowflake for a model', function () {
    config()->set('human-keys.generator', 'snowflake');

    $model = Post::query()->create();

    [$prefix, $id] = explode('_', $model->getKey());

    expect($prefix)
        ->toBe(Post::getKeyPrefix())
        ->and($id)
        ->toHaveLength(18);
});
