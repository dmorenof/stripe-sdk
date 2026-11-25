<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\TaxProduct;

/**
 * TaxProductResourceTaxSettingsHeadOffice
 */
final class ResourceTaxSettingsHeadOffice extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'address',
    ];

    public \StripeSDK\DTOs\Address $address;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'address' => $value instanceof \stdClass ? $this->address = new \StripeSDK\DTOs\Address($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
