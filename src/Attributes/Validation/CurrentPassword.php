<?php

namespace Spatie\LaravelData\Attributes\Validation;

use Attribute;
use Spatie\LaravelData\Support\Validation\ValidationPath;
use Spatie\LaravelData\Tests\Fakes\DummyBackedEnum;

#[Attribute(Attribute::TARGET_PROPERTY)]
class CurrentPassword extends StringValidationAttribute
{
    public function __construct(protected null|string|DummyBackedEnum $guard = null)
    {
    }

    public static function keyword(): string
    {
        return 'current_password';
    }

    public function parameters(): array
    {
        return [$this->guard];
    }
}
