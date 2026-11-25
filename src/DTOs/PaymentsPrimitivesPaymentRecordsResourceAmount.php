<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * Amount
 *
 * A representation of an amount of money, consisting of an amount and a currency.
 */
final class PaymentsPrimitivesPaymentRecordsResourceAmount extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'currency',
        'value',
    ];

    /**
     * Three-letter [ISO currency code](https://www.iso.org/iso-4217-currency-codes.html), in lowercase. Must be a [supported currency](https://stripe.com/docs/currencies).
     * Format: currency
     */
    public string $currency;
    /**
     * A positive integer representing the amount in the currency's [minor unit](https://docs.stripe.com/currencies#zero-decimal). For example, `100` can represent 1 USD or 100 JPY.
     */
    public int $value;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'value' => is_int($value) ? $this->value = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
