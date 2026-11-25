<?php

declare(strict_types=1);

namespace StripeSDK\Requests\ShippingCostRequestVariant1\ShippingRateData;

/**
 * fixed_amount
 */
final class FixedAmountRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount',
        'currency',
    ];

    public int $amount;
    /**
     * Format: currency
     */
    public string $currency;
    public \StripeSDK\Requests\ShippingCostRequestVariant1\ShippingRateData\FixedAmount\OptionsMapRequest $currency_options;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
