<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Issuing;

/**
 * IssuingAuthorizationFleetReportedBreakdown
 */
final class AuthorizationFleetReportedBreakdown extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Breakdown of fuel portion of the purchase.
     */
    public ?\StripeSDK\DTOs\Issuing\AuthorizationFleetFuelPriceData $fuel;
    /**
     * Breakdown of non-fuel portion of the purchase.
     */
    public ?\StripeSDK\DTOs\Issuing\AuthorizationFleetNonFuelPriceData $non_fuel;
    /**
     * Information about tax included in this transaction.
     */
    public ?\StripeSDK\DTOs\Issuing\AuthorizationFleetTaxData $tax;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'fuel' => $value === null || $value instanceof \stdClass ? $this->fuel = $value === null ? null : new \StripeSDK\DTOs\Issuing\AuthorizationFleetFuelPriceData($value) : parent::assignMember($name, $value),
            'non_fuel' => $value === null || $value instanceof \stdClass ? $this->non_fuel = $value === null ? null : new \StripeSDK\DTOs\Issuing\AuthorizationFleetNonFuelPriceData($value) : parent::assignMember($name, $value),
            'tax' => $value === null || $value instanceof \stdClass ? $this->tax = $value === null ? null : new \StripeSDK\DTOs\Issuing\AuthorizationFleetTaxData($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
