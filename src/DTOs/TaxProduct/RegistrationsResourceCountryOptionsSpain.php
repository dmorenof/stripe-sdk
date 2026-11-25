<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\TaxProduct;

/**
 * TaxProductRegistrationsResourceCountryOptionsSpain
 */
final class RegistrationsResourceCountryOptionsSpain extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    public \StripeSDK\DTOs\TaxProduct\RegistrationsResourceCountryOptionsEuStandard $standard;
    /**
     * Type of registration in ES.
     */
    public \StripeSDK\Enums\TaxProduct\RegistrationsResourceCountryOptionsSpain\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'standard' => $value instanceof \stdClass ? $this->standard = new \StripeSDK\DTOs\TaxProduct\RegistrationsResourceCountryOptionsEuStandard($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\TaxProduct\RegistrationsResourceCountryOptionsSpain\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
