<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Tax\Registrations\Post\CountryOptions;

/**
 * europe
 */
final class OptionsIeRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    public \StripeSDK\Requests\V1\Tax\Registrations\Post\CountryOptions\Ie\IeStandardRequest $standard;
    public \StripeSDK\Enums\V1\Tax\Registrations\Post\CountryOptions\Ie\IeTypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\V1\Tax\Registrations\Post\CountryOptions\Ie\IeTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
