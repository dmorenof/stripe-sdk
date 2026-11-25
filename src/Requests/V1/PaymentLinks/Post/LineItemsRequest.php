<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentLinks\Post;

/**
 * line_items_create_params
 */
final class LineItemsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'quantity',
    ];

    protected const array VALIDATION = [
        'price' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\Requests\V1\PaymentLinks\Post\LineItemsItem\AdjustableQuantityRequest $adjustable_quantity;
    public string $price {
        set {
            $this->assigning('price', $value);
            $this->price = $value;
        }
    }
    public \StripeSDK\Requests\V1\PaymentLinks\Post\LineItemsItem\PriceDataRequest $price_data;
    public int $quantity;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'price' => is_string($value) ? $this->price = $value : parent::assignMember($name, $value),
            'quantity' => is_int($value) ? $this->quantity = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
