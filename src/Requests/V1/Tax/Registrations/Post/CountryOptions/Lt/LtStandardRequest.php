<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Tax\Registrations\Post\CountryOptions\Lt;

/**
 * standard
 */
final class LtStandardRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'place_of_supply_scheme',
    ];

    public \StripeSDK\Enums\V1\Tax\Registrations\Post\CountryOptions\Lt\Standard\SupplySchemeEnum $place_of_supply_scheme;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'place_of_supply_scheme' => is_string($value) ? $this->place_of_supply_scheme = \StripeSDK\Enums\V1\Tax\Registrations\Post\CountryOptions\Lt\Standard\SupplySchemeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
