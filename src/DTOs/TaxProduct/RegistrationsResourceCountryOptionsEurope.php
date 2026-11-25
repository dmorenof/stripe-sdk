<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\TaxProduct;

/**
 * TaxProductRegistrationsResourceCountryOptionsEurope
 */
final class RegistrationsResourceCountryOptionsEurope extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    public \StripeSDK\DTOs\TaxProduct\RegistrationsResourceCountryOptionsEuStandard $standard;
    /**
     * Type of registration in an EU country.
     */
    public \StripeSDK\Enums\TaxProduct\RegistrationsResourceCountryOptionsEurope\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'standard' => $value instanceof \stdClass ? $this->standard = new \StripeSDK\DTOs\TaxProduct\RegistrationsResourceCountryOptionsEuStandard($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\TaxProduct\RegistrationsResourceCountryOptionsEurope\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
