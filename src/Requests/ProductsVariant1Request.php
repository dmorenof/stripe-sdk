<?php

declare(strict_types=1);

namespace StripeSDK\Requests;

/**
 * subscription_update_product_param
 */
final class ProductsVariant1Request extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'prices',
        'product',
    ];

    protected const array VALIDATION = [
        'product' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\Requests\UpdateProductsRequestVariant1Item\AdjustableQuantityRequest $adjustable_quantity;
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $prices;
    public string $product {
        set {
            $this->assigning('product', $value);
            $this->product = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'prices' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->prices = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'product' => is_string($value) ? $this->product = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
