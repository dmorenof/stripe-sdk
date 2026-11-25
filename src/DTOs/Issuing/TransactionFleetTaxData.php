<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Issuing;

/**
 * IssuingTransactionFleetTaxData
 */
final class TransactionFleetTaxData extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Amount of state or provincial Sales Tax included in the transaction amount. Null if not reported by merchant or not subject to tax.
     * Format: decimal
     */
    public ?string $local_amount_decimal;
    /**
     * Amount of national Sales Tax or VAT included in the transaction amount. Null if not reported by merchant or not subject to tax.
     * Format: decimal
     */
    public ?string $national_amount_decimal;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'local_amount_decimal' => $value === null || is_string($value) ? $this->local_amount_decimal = $value : parent::assignMember($name, $value),
            'national_amount_decimal' => $value === null || is_string($value) ? $this->national_amount_decimal = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
