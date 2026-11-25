<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Tax\Registrations\Post\CountryOptions;

/**
 * europe
 */
final class OptionsCyRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    public \StripeSDK\Requests\V1\Tax\Registrations\Post\CountryOptions\Cy\CyStandardRequest $standard;
    public \StripeSDK\Enums\V1\Tax\Registrations\Post\CountryOptions\Cy\CyTypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\V1\Tax\Registrations\Post\CountryOptions\Cy\CyTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
