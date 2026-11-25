<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Billing;

/**
 * BillingCreditGrantsResourceMonetaryAmount
 */
final class CreditGrantsResourceMonetaryAmount extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'currency',
        'value',
    ];

    protected const array VALIDATION = [
        'currency' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Three-letter [ISO currency code](https://www.iso.org/iso-4217-currency-codes.html), in lowercase. Must be a [supported currency](https://stripe.com/docs/currencies).
     */
    public string $currency {
        set {
            $this->assigning('currency', $value);
            $this->currency = $value;
        }
    }
    /**
     * A positive integer representing the amount.
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
