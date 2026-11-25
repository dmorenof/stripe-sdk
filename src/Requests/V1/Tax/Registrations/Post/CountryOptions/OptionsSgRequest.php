<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Tax\Registrations\Post\CountryOptions;

/**
 * default
 */
final class OptionsSgRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    public \StripeSDK\Requests\V1\Tax\Registrations\Post\CountryOptions\Sg\SgStandardRequest $standard;
    public \StripeSDK\Enums\V1\Tax\Registrations\Post\CountryOptions\Sg\SgTypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\V1\Tax\Registrations\Post\CountryOptions\Sg\SgTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
