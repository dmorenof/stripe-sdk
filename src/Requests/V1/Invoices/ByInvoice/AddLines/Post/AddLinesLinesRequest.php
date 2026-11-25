<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Invoices\ByInvoice\AddLines\Post;

/**
 * lines_data_param
 */
final class AddLinesLinesRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'description' => [
            'maxLength' => 5000,
        ],
        'invoice_item' => [
            'maxLength' => 5000,
        ],
    ];

    public int $amount;
    public string $description {
        set {
            $this->assigning('description', $value);
            $this->description = $value;
        }
    }
    public bool $discountable;
    public \StripeSDK\Requests\V1\Invoices\ByInvoice\AddLines\Post\LinesItem\LinesItemDiscountsRequest $discounts;
    public string $invoice_item {
        set {
            $this->assigning('invoice_item', $value);
            $this->invoice_item = $value;
        }
    }
    public \StripeSDK\Requests\V1\Invoices\ByInvoice\AddLines\Post\LinesItem\LinesItemMetadataRequest $metadata;
    public \StripeSDK\Requests\V1\Invoices\ByInvoice\AddLines\Post\LinesItem\LinesItemPeriodRequest $period;
    public \StripeSDK\Requests\V1\Invoices\ByInvoice\AddLines\Post\LinesItem\PriceDataRequest $price_data;
    public \StripeSDK\Requests\V1\Invoices\ByInvoice\AddLines\Post\LinesItem\LinesItemPricingRequest $pricing;
    public int $quantity;
    /**
     * Format: decimal
     */
    public string $quantity_decimal;
    public \StripeSDK\Requests\V1\Invoices\ByInvoice\AddLines\Post\LinesItem\TaxAmountsRequest $tax_amounts;
    public \StripeSDK\Requests\V1\Invoices\ByInvoice\AddLines\Post\LinesItem\TaxRatesRequest $tax_rates;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'discountable' => is_bool($value) ? $this->discountable = $value : parent::assignMember($name, $value),
            'invoice_item' => is_string($value) ? $this->invoice_item = $value : parent::assignMember($name, $value),
            'quantity' => is_int($value) ? $this->quantity = $value : parent::assignMember($name, $value),
            'quantity_decimal' => is_string($value) ? $this->quantity_decimal = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
