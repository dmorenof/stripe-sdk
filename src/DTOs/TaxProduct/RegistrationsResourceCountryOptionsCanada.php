<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\TaxProduct;

/**
 * TaxProductRegistrationsResourceCountryOptionsCanada
 */
final class RegistrationsResourceCountryOptionsCanada extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    public \StripeSDK\DTOs\TaxProduct\RegistrationsResourceCountryOptionsCaProvinceStandard $province_standard;
    /**
     * Type of registration in Canada.
     */
    public \StripeSDK\Enums\TaxProduct\RegistrationsResourceCountryOptionsCanada\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'province_standard' => $value instanceof \stdClass ? $this->province_standard = new \StripeSDK\DTOs\TaxProduct\RegistrationsResourceCountryOptionsCaProvinceStandard($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\TaxProduct\RegistrationsResourceCountryOptionsCanada\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
