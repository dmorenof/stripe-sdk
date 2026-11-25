<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Invoices\ByInvoice\UpdateLines\Post;

/**
 * lines_data_param
 */
final class UpdateLinesLinesRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'id',
    ];

    protected const array VALIDATION = [
        'description' => [
            'maxLength' => 5000,
        ],
        'id' => [
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
    public \StripeSDK\Requests\V1\Invoices\ByInvoice\UpdateLines\Post\LinesItem\LinesItemDiscountsRequest $discounts;
    public string $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    public \StripeSDK\Requests\V1\Invoices\ByInvoice\UpdateLines\Post\LinesItem\LinesItemMetadataRequest $metadata;
    public \StripeSDK\Requests\V1\Invoices\ByInvoice\UpdateLines\Post\LinesItem\LinesItemPeriodRequest $period;
    public \StripeSDK\Requests\V1\Invoices\ByInvoice\UpdateLines\Post\LinesItem\PriceDataRequest $price_data;
    public \StripeSDK\Requests\V1\Invoices\ByInvoice\UpdateLines\Post\LinesItem\LinesItemPricingRequest $pricing;
    public int $quantity;
    /**
     * Format: decimal
     */
    public string $quantity_decimal;
    public \StripeSDK\Requests\V1\Invoices\ByInvoice\UpdateLines\Post\LinesItem\TaxAmountsRequest $tax_amounts;
    public \StripeSDK\Requests\V1\Invoices\ByInvoice\UpdateLines\Post\LinesItem\TaxRatesRequest $tax_rates;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'discountable' => is_bool($value) ? $this->discountable = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'quantity' => is_int($value) ? $this->quantity = $value : parent::assignMember($name, $value),
            'quantity_decimal' => is_string($value) ? $this->quantity_decimal = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
