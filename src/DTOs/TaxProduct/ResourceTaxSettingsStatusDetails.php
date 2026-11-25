<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\TaxProduct;

/**
 * TaxProductResourceTaxSettingsStatusDetails
 */
final class ResourceTaxSettingsStatusDetails extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\DTOs\TaxProduct\ResourceTaxSettingsStatusDetailsResourceActive $active;
    public \StripeSDK\DTOs\TaxProduct\ResourceTaxSettingsStatusDetailsResourcePending $pending;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'pending' => $value instanceof \stdClass ? $this->pending = new \StripeSDK\DTOs\TaxProduct\ResourceTaxSettingsStatusDetailsResourcePending($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
