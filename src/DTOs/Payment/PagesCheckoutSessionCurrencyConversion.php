<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * PaymentPagesCheckoutSessionCurrencyConversion
 */
final class PagesCheckoutSessionCurrencyConversion extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount_subtotal',
        'amount_total',
        'fx_rate',
        'source_currency',
    ];

    protected const array VALIDATION = [
        'source_currency' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Total of all items in source currency before discounts or taxes are applied.
     */
    public int $amount_subtotal;
    /**
     * Total of all items in source currency after discounts and taxes are applied.
     */
    public int $amount_total;
    /**
     * Exchange rate used to convert source currency amounts to customer currency amounts
     * Format: decimal
     */
    public string $fx_rate;
    /**
     * Creation currency of the CheckoutSession before localization
     */
    public string $source_currency {
        set {
            $this->assigning('source_currency', $value);
            $this->source_currency = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount_subtotal' => is_int($value) ? $this->amount_subtotal = $value : parent::assignMember($name, $value),
            'amount_total' => is_int($value) ? $this->amount_total = $value : parent::assignMember($name, $value),
            'fx_rate' => is_string($value) ? $this->fx_rate = $value : parent::assignMember($name, $value),
            'source_currency' => is_string($value) ? $this->source_currency = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
