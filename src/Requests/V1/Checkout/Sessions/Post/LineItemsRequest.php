<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Checkout\Sessions\Post;

/**
 * line_item_params
 */
final class LineItemsRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'price' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\LineItemsItem\AdjustableQuantityRequest $adjustable_quantity;
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\LineItemsItem\MetadataMapRequest $metadata;
    public string $price {
        set {
            $this->assigning('price', $value);
            $this->price = $value;
        }
    }
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\LineItemsItem\PriceDataRequest $price_data;
    public int $quantity;
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $tax_rates;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'price' => is_string($value) ? $this->price = $value : parent::assignMember($name, $value),
            'quantity' => is_int($value) ? $this->quantity = $value : parent::assignMember($name, $value),
            'tax_rates' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->tax_rates = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
