<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Invoiceitems;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'customer' => [
            'maxLength' => 5000,
        ],
        'customer_account' => [
            'maxLength' => 5000,
        ],
        'description' => [
            'maxLength' => 5000,
        ],
        'invoice' => [
            'maxLength' => 5000,
        ],
        'subscription' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The integer amount in cents (or local equivalent) of the charge to be applied to the upcoming invoice. Passing in a negative `amount` will reduce the `amount_due` on the invoice.
     */
    public int $amount;
    /**
     * Three-letter [ISO currency code](https://www.iso.org/iso-4217-currency-codes.html), in lowercase. Must be a [supported currency](https://stripe.com/docs/currencies).
     * Format: currency
     */
    public string $currency;
    /**
     * The ID of the customer to bill for this invoice item.
     */
    public string $customer {
        set {
            $this->assigning('customer', $value);
            $this->customer = $value;
        }
    }
    /**
     * The ID of the account representing the customer to bill for this invoice item.
     */
    public string $customer_account {
        set {
            $this->assigning('customer_account', $value);
            $this->customer_account = $value;
        }
    }
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
     * Controls whether discounts apply to this invoice item. Defaults to false for prorations or negative invoice items, and true for all other invoice items.
     */
    public bool $discountable;
    /**
     * The coupons and promotion codes to redeem into discounts for the invoice item or invoice line item.
     */
    public \StripeSDK\Requests\V1\Invoiceitems\Post\InvoiceitemsDiscountsRequest $discounts;
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * The ID of an existing invoice to add this invoice item to. For subscription invoices, when left blank, the invoice item will be added to the next upcoming scheduled invoice. For standalone invoices, the invoice item won't be automatically added unless you pass `pending_invoice_item_behavior: 'include'` when creating the invoice. This is useful when adding invoice items in response to an invoice.created webhook. You can only add invoice items to draft invoices and there is a maximum of 250 items per invoice.
     */
    public string $invoice {
        set {
            $this->assigning('invoice', $value);
            $this->invoice = $value;
        }
    }
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format. Individual keys can be unset by posting an empty value to them. All keys can be unset by posting an empty value to `metadata`.
     */
    public \StripeSDK\Requests\V1\Invoiceitems\Post\InvoiceitemsMetadataRequest $metadata;
    /**
     * The period associated with this invoice item. When set to different values, the period will be rendered on the invoice. If you have [Stripe Revenue Recognition](https://docs.stripe.com/revenue-recognition) enabled, the period will be used to recognize and defer revenue. See the [Revenue Recognition documentation](https://docs.stripe.com/revenue-recognition/methodology/subscriptions-and-invoicing) for details.
     */
    public \StripeSDK\Requests\V1\Invoiceitems\Post\InvoiceitemsPeriodRequest $period;
    /**
     * Data used to generate a new [Price](https://docs.stripe.com/api/prices) object inline.
     */
    public \StripeSDK\Requests\V1\Invoiceitems\Post\PriceDataRequest $price_data;
    /**
     * The pricing information for the invoice item.
     */
    public \StripeSDK\Requests\V1\Invoiceitems\Post\InvoiceitemsPricingRequest $pricing;
    /**
     * Non-negative integer. The quantity of units for the invoice item. Use `quantity_decimal` instead to provide decimal precision. This field will be deprecated in favor of `quantity_decimal` in a future version.
     */
    public int $quantity;
    /**
     * Non-negative decimal with at most 12 decimal places. The quantity of units for the invoice item.
     * Format: decimal
     */
    public string $quantity_decimal;
    /**
     * The ID of a subscription to add this invoice item to. When left blank, the invoice item is added to the next upcoming scheduled invoice. When set, scheduled invoices for subscriptions other than the specified subscription will ignore the invoice item. Use this when you want to express that an invoice item has been accrued within the context of a particular subscription.
     */
    public string $subscription {
        set {
            $this->assigning('subscription', $value);
            $this->subscription = $value;
        }
    }
    /**
     * Only required if a [default tax behavior](https://docs.stripe.com/tax/products-prices-tax-categories-tax-behavior#setting-a-default-tax-behavior-(recommended)) was not provided in the Stripe Tax settings. Specifies whether the price is considered inclusive of taxes or exclusive of taxes. One of `inclusive`, `exclusive`, or `unspecified`. Once specified as either `inclusive` or `exclusive`, it cannot be changed.
     */
    public \StripeSDK\Enums\V1\Invoiceitems\Post\TaxBehaviorEnum $tax_behavior;
    /**
     * A [tax code](https://docs.stripe.com/tax/tax-categories) ID.
     */
    public \StripeSDK\Requests\V1\Invoiceitems\Post\TaxCodeRequest $tax_code;
    /**
     * The tax rates which apply to the invoice item. When set, the `default_tax_rates` on the invoice do not apply to this invoice item.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $tax_rates;
    /**
     * The decimal unit amount in cents (or local equivalent) of the charge to be applied to the upcoming invoice. This `unit_amount_decimal` will be multiplied by the quantity to get the full amount. Passing in a negative `unit_amount_decimal` will reduce the `amount_due` on the invoice. Accepts at most 12 decimal places.
     * Format: decimal
     */
    public string $unit_amount_decimal;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'customer' => is_string($value) ? $this->customer = $value : parent::assignMember($name, $value),
            'customer_account' => is_string($value) ? $this->customer_account = $value : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'discountable' => is_bool($value) ? $this->discountable = $value : parent::assignMember($name, $value),
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'invoice' => is_string($value) ? $this->invoice = $value : parent::assignMember($name, $value),
            'quantity' => is_int($value) ? $this->quantity = $value : parent::assignMember($name, $value),
            'quantity_decimal' => is_string($value) ? $this->quantity_decimal = $value : parent::assignMember($name, $value),
            'subscription' => is_string($value) ? $this->subscription = $value : parent::assignMember($name, $value),
            'tax_behavior' => is_string($value) ? $this->tax_behavior = \StripeSDK\Enums\V1\Invoiceitems\Post\TaxBehaviorEnum::from($value) : parent::assignMember($name, $value),
            'tax_rates' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->tax_rates = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'unit_amount_decimal' => is_string($value) ? $this->unit_amount_decimal = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
