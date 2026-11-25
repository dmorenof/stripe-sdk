<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Invoiceitems\ByInvoiceitem;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'description' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The integer amount in cents (or local equivalent) of the charge to be applied to the upcoming invoice. If you want to apply a credit to the customer's account, pass a negative amount.
     */
    public int $amount;
    /**
     * An arbitrary string which you can attach to the invoice item. The description is displayed in the invoice for easy tracking.
     */
    public string $description {
        set {
            $this->assigning('description', $value);
            $this->description = $value;
        }
    }
    /**
     * Controls whether discounts apply to this invoice item. Defaults to false for prorations or negative invoice items, and true for all other invoice items. Cannot be set to true for prorations.
     */
    public bool $discountable;
    /**
     * The coupons, promotion codes & existing discounts which apply to the invoice item or invoice line item. Item discounts are applied before invoice discounts. Pass an empty string to remove previously-defined discounts.
     */
    public \StripeSDK\Requests\V1\Invoiceitems\ByInvoiceitem\Post\ByInvoiceitemDiscountsRequest $discounts;
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * Pass an empty string to remove previously-defined invoicing rules. Setting invoicing rules is not supported.
     */
    public \StripeSDK\Enums\V1\Invoiceitems\ByInvoiceitem\Post\InvoicingRulesEnum $invoicing_rules;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format. Individual keys can be unset by posting an empty value to them. All keys can be unset by posting an empty value to `metadata`.
     */
    public \StripeSDK\Requests\V1\Invoiceitems\ByInvoiceitem\Post\ByInvoiceitemMetadataRequest $metadata;
    /**
     * The period associated with this invoice item. When set to different values, the period will be rendered on the invoice. If you have [Stripe Revenue Recognition](https://docs.stripe.com/revenue-recognition) enabled, the period will be used to recognize and defer revenue. See the [Revenue Recognition documentation](https://docs.stripe.com/revenue-recognition/methodology/subscriptions-and-invoicing) for details.
     */
    public \StripeSDK\Requests\V1\Invoiceitems\ByInvoiceitem\Post\ByInvoiceitemPeriodRequest $period;
    /**
     * Data used to generate a new [Price](https://docs.stripe.com/api/prices) object inline.
     */
    public \StripeSDK\Requests\V1\Invoiceitems\ByInvoiceitem\Post\PriceDataRequest $price_data;
    /**
     * The pricing information for the invoice item.
     */
    public \StripeSDK\Requests\V1\Invoiceitems\ByInvoiceitem\Post\ByInvoiceitemPricingRequest $pricing;
    /**
     * Non-negative integer. The quantity of units for the invoice item. Use `quantity_decimal` instead to provide decimal precision. This field will be deprecated in favor of `quantity_decimal` in a future version.
     */
    public int $quantity;
    /**
     * Non-negative decimal with at most 12 decimal places. The quantity of units for the line item.
     * Format: decimal
     */
    public string $quantity_decimal;
    /**
     * Only required if a [default tax behavior](https://docs.stripe.com/tax/products-prices-tax-categories-tax-behavior#setting-a-default-tax-behavior-(recommended)) was not provided in the Stripe Tax settings. Specifies whether the price is considered inclusive of taxes or exclusive of taxes. One of `inclusive`, `exclusive`, or `unspecified`. Once specified as either `inclusive` or `exclusive`, it cannot be changed.
     */
    public \StripeSDK\Enums\V1\Invoiceitems\ByInvoiceitem\Post\TaxBehaviorEnum $tax_behavior;
    /**
     * A [tax code](https://docs.stripe.com/tax/tax-categories) ID.
     */
    public \StripeSDK\Requests\V1\Invoiceitems\ByInvoiceitem\Post\TaxCodeRequest $tax_code;
    /**
     * The tax rates which apply to the invoice item. When set, the `default_tax_rates` on the invoice do not apply to this invoice item. Pass an empty string to remove previously-defined tax rates.
     */
    public \StripeSDK\Requests\V1\Invoiceitems\ByInvoiceitem\Post\TaxRatesRequest $tax_rates;
    /**
     * The decimal unit amount in cents (or local equivalent) of the charge to be applied to the upcoming invoice. This `unit_amount_decimal` will be multiplied by the quantity to get the full amount. Passing in a negative `unit_amount_decimal` will reduce the `amount_due` on the invoice. Accepts at most 12 decimal places.
     * Format: decimal
     */
    public string $unit_amount_decimal;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'discountable' => is_bool($value) ? $this->discountable = $value : parent::assignMember($name, $value),
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'invoicing_rules' => is_string($value) ? $this->invoicing_rules = \StripeSDK\Enums\V1\Invoiceitems\ByInvoiceitem\Post\InvoicingRulesEnum::from($value) : parent::assignMember($name, $value),
            'quantity' => is_int($value) ? $this->quantity = $value : parent::assignMember($name, $value),
            'quantity_decimal' => is_string($value) ? $this->quantity_decimal = $value : parent::assignMember($name, $value),
            'tax_behavior' => is_string($value) ? $this->tax_behavior = \StripeSDK\Enums\V1\Invoiceitems\ByInvoiceitem\Post\TaxBehaviorEnum::from($value) : parent::assignMember($name, $value),
            'unit_amount_decimal' => is_string($value) ? $this->unit_amount_decimal = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
