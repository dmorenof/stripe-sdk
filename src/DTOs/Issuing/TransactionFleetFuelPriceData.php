<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Issuing;

/**
 * IssuingTransactionFleetFuelPriceData
 */
final class TransactionFleetFuelPriceData extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Gross fuel amount that should equal Fuel Volume multiplied by Fuel Unit Cost, inclusive of taxes.
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
