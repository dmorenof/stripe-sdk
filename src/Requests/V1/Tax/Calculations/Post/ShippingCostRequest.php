<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Tax\Calculations\Post;

/**
 * shipping_cost
 *
 * Shipping cost details to be used for the calculation.
 */
final class ShippingCostRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'shipping_rate' => [
            'maxLength' => 5000,
        ],
    ];

    public int $amount;
    public string $shipping_rate {
        set {
            $this->assigning('shipping_rate', $value);
            $this->shipping_rate = $value;
        }
    }
    public \StripeSDK\Enums\V1\Tax\Calculations\Post\ShippingCost\TaxBehaviorEnum $tax_behavior;
    public string $tax_code;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'shipping_rate' => is_string($value) ? $this->shipping_rate = $value : parent::assignMember($name, $value),
            'tax_behavior' => is_string($value) ? $this->tax_behavior = \StripeSDK\Enums\V1\Tax\Calculations\Post\ShippingCost\TaxBehaviorEnum::from($value) : parent::assignMember($name, $value),
            'tax_code' => is_string($value) ? $this->tax_code = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
