<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Tax\Registrations\Post\CountryOptions;

/**
 * simplified
 */
final class OptionsUaRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    public \StripeSDK\Enums\V1\Tax\Registrations\Post\CountryOptions\Ua\UaTypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\V1\Tax\Registrations\Post\CountryOptions\Ua\UaTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
