<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\TaxProduct;

/**
 * TaxProductResourceShipFromDetails
 */
final class ResourceShipFromDetails extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'address',
    ];

    public \StripeSDK\DTOs\TaxProduct\ResourcePostalAddress $address;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'address' => $value instanceof \stdClass ? $this->address = new \StripeSDK\DTOs\TaxProduct\ResourcePostalAddress($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
