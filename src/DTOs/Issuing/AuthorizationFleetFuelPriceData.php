<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Issuing;

/**
 * IssuingAuthorizationFleetFuelPriceData
 */
final class AuthorizationFleetFuelPriceData extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Gross fuel amount that should equal Fuel Quantity multiplied by Fuel Unit Cost, inclusive of taxes.
     * Format: decimal
     */
    public ?string $gross_amount_decimal;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'gross_amount_decimal' => $value === null || is_string($value) ? $this->gross_amount_decimal = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
