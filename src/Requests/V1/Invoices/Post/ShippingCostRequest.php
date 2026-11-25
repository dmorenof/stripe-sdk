<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Invoices\Post;

/**
 * shipping_cost
 *
 * Settings for the cost of shipping for this invoice.
 */
final class ShippingCostRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'shipping_rate' => [
            'maxLength' => 5000,
        ],
    ];

    public string $shipping_rate {
        set {
            $this->assigning('shipping_rate', $value);
            $this->shipping_rate = $value;
        }
    }
    public \StripeSDK\Requests\V1\Invoices\Post\ShippingCost\RateDataRequest $shipping_rate_data;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'shipping_rate' => is_string($value) ? $this->shipping_rate = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
