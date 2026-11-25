<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Invoices\ByInvoice\Lines\ByLineItemId;

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
     * Controls whether discounts apply to this line item. Defaults to false for prorations or negative line items, and true for all other line items. Cannot be set to true for prorations.
     */
    public bool $discountable;
    /**
     * The coupons, promotion codes & existing discounts which apply to the line item. Item discounts are applied before invoice discounts. Pass an empty string to remove previously-defined discounts.
     */
    public \StripeSDK\Requests\V1\Invoices\ByInvoice\Lines\ByLineItemId\Post\ByLineItemIdDiscountsRequest $discounts;
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format. Individual keys can be unset by posting an empty value to them. All keys can be unset by posting an empty value to `metadata`. For [type=subscription](/api/invoices/line_item) line items, the incoming metadata specified on the request is directly used to set this value, in contrast to [type=invoiceitem](/api/invoices/line_item) line items, where any existing metadata on the invoice line is merged with the incoming data.
     */
    public \StripeSDK\Requests\V1\Invoices\ByInvoice\Lines\ByLineItemId\Post\ByLineItemIdMetadataRequest $metadata;
    /**
     * The period associated with this invoice item. When set to different values, the period will be rendered on the invoice. If you have [Stripe Revenue Recognition](https://docs.stripe.com/revenue-recognition) enabled, the period will be used to recognize and defer revenue. See the [Revenue Recognition documentation](https://docs.stripe.com/revenue-recognition/methodology/subscriptions-and-invoicing) for details.
     */
    public \StripeSDK\Requests\V1\Invoices\ByInvoice\Lines\ByLineItemId\Post\ByLineItemIdPeriodRequest $period;
    /**
     * Data used to generate a new [Price](https://docs.stripe.com/api/prices) object inline.
     */
    public \StripeSDK\Requests\V1\Invoices\ByInvoice\Lines\ByLineItemId\Post\PriceDataRequest $price_data;
    /**
     * The pricing information for the invoice item.
     */
    public \StripeSDK\Requests\V1\Invoices\ByInvoice\Lines\ByLineItemId\Post\ByLineItemIdPricingRequest $pricing;
    /**
     * Non-negative integer. The quantity of units for the line item. Use `quantity_decimal` instead to provide decimal precision. This field will be deprecated in favor of `quantity_decimal` in a future version.
     */
    public int $quantity;
    /**
     * Non-negative decimal with at most 12 decimal places. The quantity of units for the line item.
     * Format: decimal
     */
    public string $quantity_decimal;
    /**
     * A list of up to 20 tax amounts for this line item. This can be useful if you calculate taxes on your own or use a third-party to calculate them. You cannot set tax amounts if any line item has [tax_rates](https://docs.stripe.com/api/invoices/line_item#invoice_line_item_object-tax_rates) or if the invoice has [default_tax_rates](https://docs.stripe.com/api/invoices/object#invoice_object-default_tax_rates) or uses [automatic tax](https://docs.stripe.com/tax/invoicing). Pass an empty string to remove previously defined tax amounts.
     */
    public \StripeSDK\Requests\V1\Invoices\ByInvoice\Lines\ByLineItemId\Post\TaxAmountsRequest $tax_amounts;
    /**
     * The tax rates which apply to the line item. When set, the `default_tax_rates` on the invoice do not apply to this line item. Pass an empty string to remove previously-defined tax rates.
     */
    public \StripeSDK\Requests\V1\Invoices\ByInvoice\Lines\ByLineItemId\Post\TaxRatesRequest $tax_rates;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'discountable' => is_bool($value) ? $this->discountable = $value : parent::assignMember($name, $value),
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'quantity' => is_int($value) ? $this->quantity = $value : parent::assignMember($name, $value),
            'quantity_decimal' => is_string($value) ? $this->quantity_decimal = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
