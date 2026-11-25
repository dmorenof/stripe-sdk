<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\TaxProduct;

/**
 * TaxProductRegistrationsResourceCountryOptionsDefaultInboundGoods
 */
final class RegistrationsResourceCountryOptionsDefaultInboundGoods extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    public \StripeSDK\DTOs\TaxProduct\RegistrationsResourceCountryOptionsDefaultStandard $standard;
    /**
     * Type of registration in `country`.
     */
    public \StripeSDK\Enums\TaxProduct\RegistrationsResourceCountryOptionsDefaultInboundGoods\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'standard' => $value instanceof \stdClass ? $this->standard = new \StripeSDK\DTOs\TaxProduct\RegistrationsResourceCountryOptionsDefaultStandard($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\TaxProduct\RegistrationsResourceCountryOptionsDefaultInboundGoods\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
