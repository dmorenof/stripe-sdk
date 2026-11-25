<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Invoices\CreatePreview\Post;

/**
 * invoice_item_preview_params
 */
final class InvoiceItemsRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'description' => [
            'maxLength' => 5000,
        ],
        'invoiceitem' => [
            'maxLength' => 5000,
        ],
        'price' => [
            'maxLength' => 5000,
        ],
    ];

    public int $amount;
    /**
     * Format: currency
     */
    public string $currency;
    public string $description {
        set {
            $this->assigning('description', $value);
            $this->description = $value;
        }
    }
    public bool $discountable;
    public \StripeSDK\Requests\V1\Invoices\CreatePreview\Post\InvoiceItemsItem\ItemsItemDiscountsRequest $discounts;
    public string $invoiceitem {
        set {
            $this->assigning('invoiceitem', $value);
            $this->invoiceitem = $value;
        }
    }
    public \StripeSDK\Requests\V1\Invoices\CreatePreview\Post\InvoiceItemsItem\ItemsItemMetadataRequest $metadata;
    public \StripeSDK\Requests\V1\Invoices\CreatePreview\Post\InvoiceItemsItem\ItemsItemPeriodRequest $period;
    public string $price {
        set {
            $this->assigning('price', $value);
            $this->price = $value;
        }
    }
    public \StripeSDK\Requests\V1\Invoices\CreatePreview\Post\InvoiceItemsItem\PriceDataRequest $price_data;
    public int $quantity;
    /**
     * Format: decimal
     */
    public string $quantity_decimal;
    public \StripeSDK\Enums\V1\Invoices\CreatePreview\Post\InvoiceItemsItem\TaxBehaviorEnum $tax_behavior;
    public \StripeSDK\Requests\V1\Invoices\CreatePreview\Post\InvoiceItemsItem\TaxCodeRequest $tax_code;
    public \StripeSDK\Requests\V1\Invoices\CreatePreview\Post\InvoiceItemsItem\TaxRatesRequest $tax_rates;
    public int $unit_amount;
    /**
     * Format: decimal
     */
    public string $unit_amount_decimal;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'discountable' => is_bool($value) ? $this->discountable = $value : parent::assignMember($name, $value),
            'invoiceitem' => is_string($value) ? $this->invoiceitem = $value : parent::assignMember($name, $value),
            'price' => is_string($value) ? $this->price = $value : parent::assignMember($name, $value),
            'quantity' => is_int($value) ? $this->quantity = $value : parent::assignMember($name, $value),
            'quantity_decimal' => is_string($value) ? $this->quantity_decimal = $value : parent::assignMember($name, $value),
            'tax_behavior' => is_string($value) ? $this->tax_behavior = \StripeSDK\Enums\V1\Invoices\CreatePreview\Post\InvoiceItemsItem\TaxBehaviorEnum::from($value) : parent::assignMember($name, $value),
            'unit_amount' => is_int($value) ? $this->unit_amount = $value : parent::assignMember($name, $value),
            'unit_amount_decimal' => is_string($value) ? $this->unit_amount_decimal = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
