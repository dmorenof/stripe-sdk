<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Balance;

/**
 * BalanceAmount
 */
final class Amount extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount',
        'currency',
    ];

    /**
     * Balance amount.
     */
    public int $amount;
    /**
     * Three-letter [ISO currency code](https://www.iso.org/iso-4217-currency-codes.html), in lowercase. Must be a [supported currency](https://stripe.com/docs/currencies).
     * Format: currency
     */
    public string $currency;
    public \StripeSDK\DTOs\Balance\AmountBySourceType $source_types;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'source_types' => $value instanceof \stdClass ? $this->source_types = new \StripeSDK\DTOs\Balance\AmountBySourceType($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
