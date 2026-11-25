<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * Flat Amount
 *
 * The amount of the tax rate when the `rate_type`` is `flat_amount`. Tax rates with `rate_type` `percentage` can vary based on the transaction, resulting in this field being `null`. This field exposes the amount and currency of the flat tax rate.
 */
final class TaxRateFlatAmount extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount',
        'currency',
    ];

    protected const array VALIDATION = [
        'currency' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Amount of the tax when the `rate_type` is `flat_amount`. This positive integer represents how much to charge in the smallest currency unit (e.g., 100 cents to charge $1.00 or 100 to charge ¥100, a zero-decimal currency). The amount value supports up to eight digits (e.g., a value of 99999999 for a USD charge of $999,999.99).
     */
    public int $amount;
    /**
     * Three-letter ISO currency code, in lowercase.
     */
    public string $currency {
        set {
            $this->assigning('currency', $value);
            $this->currency = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
