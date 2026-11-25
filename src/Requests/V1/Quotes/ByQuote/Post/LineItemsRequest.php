<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Quotes\ByQuote\Post;

/**
 * line_item_update_params
 */
final class LineItemsRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'id' => [
            'maxLength' => 5000,
        ],
        'price' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\Requests\V1\Quotes\ByQuote\Post\LineItemsItem\ItemsItemDiscountsRequest $discounts;
    public string $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    public string $price {
        set {
            $this->assigning('price', $value);
            $this->price = $value;
        }
    }
    public \StripeSDK\Requests\V1\Quotes\ByQuote\Post\LineItemsItem\PriceDataRequest $price_data;
    public int $quantity;
    public \StripeSDK\Requests\V1\Quotes\ByQuote\Post\LineItemsItem\TaxRatesRequest $tax_rates;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'price' => is_string($value) ? $this->price = $value : parent::assignMember($name, $value),
            'quantity' => is_int($value) ? $this->quantity = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
