<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Issuing;

/**
 * IssuingTransactionFleetReportedBreakdown
 */
final class TransactionFleetReportedBreakdown extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Breakdown of fuel portion of the purchase.
     */
    public ?\StripeSDK\DTOs\Issuing\TransactionFleetFuelPriceData $fuel;
    /**
     * Breakdown of non-fuel portion of the purchase.
     */
    public ?\StripeSDK\DTOs\Issuing\TransactionFleetNonFuelPriceData $non_fuel;
    /**
     * Information about tax included in this transaction.
     */
    public ?\StripeSDK\DTOs\Issuing\TransactionFleetTaxData $tax;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'fuel' => $value === null || $value instanceof \stdClass ? $this->fuel = $value === null ? null : new \StripeSDK\DTOs\Issuing\TransactionFleetFuelPriceData($value) : parent::assignMember($name, $value),
            'non_fuel' => $value === null || $value instanceof \stdClass ? $this->non_fuel = $value === null ? null : new \StripeSDK\DTOs\Issuing\TransactionFleetNonFuelPriceData($value) : parent::assignMember($name, $value),
            'tax' => $value === null || $value instanceof \stdClass ? $this->tax = $value === null ? null : new \StripeSDK\DTOs\Issuing\TransactionFleetTaxData($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
