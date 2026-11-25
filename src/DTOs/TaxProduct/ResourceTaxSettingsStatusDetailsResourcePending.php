<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\TaxProduct;

/**
 * TaxProductResourceTaxSettingsStatusDetailsResourcePending
 */
final class ResourceTaxSettingsStatusDetailsResourcePending extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The list of missing fields that are required to perform calculations. It includes the entry `head_office` when the status is `pending`. It is recommended to set the optional values even if they aren't listed as required for calculating taxes. Calculations can fail if missing fields aren't explicitly provided on every call.
     */
    public ?\StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $missing_fields;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'missing_fields' => $value === null || (is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item))) ? $this->missing_fields = $value === null ? null : new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
