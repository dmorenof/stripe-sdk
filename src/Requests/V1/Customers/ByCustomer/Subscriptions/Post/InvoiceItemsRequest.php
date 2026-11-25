<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Customers\ByCustomer\Subscriptions\Post;

/**
 * add_invoice_item_entry
 */
final class InvoiceItemsRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'price' => [
            'maxLength' => 5000,
        ],
    ];

    public bool $discountable;
    public \StripeSDK\Collections\V1\Customers\ByCustomer\Subscriptions\Post\AddInvoiceItemsItem\ItemsItemDiscountsCollection $discounts;
    public \StripeSDK\Requests\V1\Customers\ByCustomer\Subscriptions\Post\AddInvoiceItemsItem\MetadataMapRequest $metadata;
    public \StripeSDK\Requests\V1\Customers\ByCustomer\Subscriptions\Post\AddInvoiceItemsItem\ItemsItemPeriodRequest $period;
    public string $price {
        set {
            $this->assigning('price', $value);
            $this->price = $value;
        }
    }
    public \StripeSDK\Requests\V1\Customers\ByCustomer\Subscriptions\Post\AddInvoiceItemsItem\PriceDataRequest $price_data;
    public int $quantity;
    public \StripeSDK\Requests\V1\Customers\ByCustomer\Subscriptions\Post\AddInvoiceItemsItem\TaxRatesRequest $tax_rates;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'discountable' => is_bool($value) ? $this->discountable = $value : parent::assignMember($name, $value),
            'price' => is_string($value) ? $this->price = $value : parent::assignMember($name, $value),
            'quantity' => is_int($value) ? $this->quantity = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
