<?php

namespace Spatie\LaravelData\Attributes\Validation;

use Attribute;
use Spatie\LaravelData\Support\Validation\ValidationPath;

#[Attribute(Attribute::TARGET_PROPERTY)]
class Digits extends StringValidationAttribute
{
    public function __construct(protected int $value)
    {
    }

    public static function keyword(): string
    {
        return 'digits';
    }

    public function parameters(): array
    {
        return [$this->value];
    }
}
