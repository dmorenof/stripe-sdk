<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Issuing;

/**
 * IssuingTransactionFleetNonFuelPriceData
 */
final class TransactionFleetNonFuelPriceData extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Gross non-fuel amount that should equal the sum of the line items, inclusive of taxes.
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
