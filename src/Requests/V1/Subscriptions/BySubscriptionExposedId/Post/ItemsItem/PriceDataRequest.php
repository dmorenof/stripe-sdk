<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Subscriptions\BySubscriptionExposedId\Post\ItemsItem;

/**
 * recurring_price_data
 */
final class PriceDataRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'currency',
        'product',
        'recurring',
    ];

    protected const array VALIDATION = [
        'product' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Format: currency
     */
    public string $currency;
    public string $product {
        set {
            $this->assigning('product', $value);
            $this->product = $value;
        }
    }
    public \StripeSDK\Requests\V1\Subscriptions\BySubscriptionExposedId\Post\ItemsItem\PriceData\DataRecurringRequest $recurring;
    public \StripeSDK\Enums\V1\Subscriptions\BySubscriptionExposedId\Post\ItemsItem\PriceData\TaxBehaviorEnum $tax_behavior;
    public int $unit_amount;
    /**
     * Format: decimal
     */
    public string $unit_amount_decimal;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'product' => is_string($value) ? $this->product = $value : parent::assignMember($name, $value),
            'tax_behavior' => is_string($value) ? $this->tax_behavior = \StripeSDK\Enums\V1\Subscriptions\BySubscriptionExposedId\Post\ItemsItem\PriceData\TaxBehaviorEnum::from($value) : parent::assignMember($name, $value),
            'unit_amount' => is_int($value) ? $this->unit_amount = $value : parent::assignMember($name, $value),
            'unit_amount_decimal' => is_string($value) ? $this->unit_amount_decimal = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
