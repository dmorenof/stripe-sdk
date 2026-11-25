<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Invoices\Post\ShippingCost\ShippingRateData\FixedAmount;

/**
 * currency_option
 */
final class OptionsValueRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount',
    ];

    public int $amount;
    public \StripeSDK\Enums\V1\Invoices\Post\ShippingCost\ShippingRateData\FixedAmount\CurrencyOptionsValue\TaxBehaviorEnum $tax_behavior;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'tax_behavior' => is_string($value) ? $this->tax_behavior = \StripeSDK\Enums\V1\Invoices\Post\ShippingCost\ShippingRateData\FixedAmount\CurrencyOptionsValue\TaxBehaviorEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
