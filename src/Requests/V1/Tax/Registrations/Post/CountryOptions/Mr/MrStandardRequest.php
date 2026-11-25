<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Tax\Registrations\Post\CountryOptions\Mr;

/**
 * standard
 */
final class MrStandardRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Enums\V1\Tax\Registrations\Post\CountryOptions\Mr\Standard\SupplySchemeEnum $place_of_supply_scheme;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'place_of_supply_scheme' => is_string($value) ? $this->place_of_supply_scheme = \StripeSDK\Enums\V1\Tax\Registrations\Post\CountryOptions\Mr\Standard\SupplySchemeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
