<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\TestHelpers\Issuing\Transactions\CreateUnlinkedRefund\Post\PurchaseDetails\Fleet\ReportedBreakdown;

/**
 * fleet_reported_breakdown_non_fuel_specs
 */
final class NonFuelRequest extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Format: decimal
     */
    public string $gross_amount_decimal;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'gross_amount_decimal' => is_string($value) ? $this->gross_amount_decimal = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
