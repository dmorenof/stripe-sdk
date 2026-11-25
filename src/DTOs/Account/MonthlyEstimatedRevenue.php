<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Account;

/**
 * AccountMonthlyEstimatedRevenue
 */
final class MonthlyEstimatedRevenue extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount',
        'currency',
    ];

    /**
     * A non-negative integer representing how much to charge in the [smallest currency unit](/currencies#zero-decimal).
     */
    public int $amount;
    /**
     * Three-letter [ISO currency code](https://www.iso.org/iso-4217-currency-codes.html), in lowercase. Must be a [supported currency](https://stripe.com/docs/currencies).
     * Format: currency
     */
    public string $currency;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
