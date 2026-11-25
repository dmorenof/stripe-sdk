<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\TaxProduct;

/**
 * TaxProductRegistrationsResourceCountryOptionsEuStandard
 */
final class RegistrationsResourceCountryOptionsEuStandard extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'place_of_supply_scheme',
    ];

    /**
     * Place of supply scheme used in an EU standard registration.
     */
    public \StripeSDK\Enums\TaxProduct\RegistrationsResourceCountryOptionsEuStandard\SupplySchemeEnum $place_of_supply_scheme;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'place_of_supply_scheme' => is_string($value) ? $this->place_of_supply_scheme = \StripeSDK\Enums\TaxProduct\RegistrationsResourceCountryOptionsEuStandard\SupplySchemeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
