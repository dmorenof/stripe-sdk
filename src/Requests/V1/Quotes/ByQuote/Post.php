<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Quotes\ByQuote;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'customer' => [
            'maxLength' => 5000,
        ],
        'customer_account' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The amount of the application fee (if any) that will be requested to be applied to the payment and transferred to the application owner's Stripe account. There cannot be any line items with recurring prices when using this field.
     */
    public \StripeSDK\Requests\V1\Quotes\ByQuote\Post\FeeAmountRequest $application_fee_amount;
    /**
     * A non-negative decimal between 0 and 100, with at most two decimal places. This represents the percentage of the subscription invoice total that will be transferred to the application owner's Stripe account. There must be at least 1 line item with a recurring price to use this field.
     */
    public \StripeSDK\Requests\V1\Quotes\ByQuote\Post\FeePercentRequest $application_fee_percent;
    /**
     * Settings for automatic tax lookup for this quote and resulting invoices and subscriptions.
     */
    public \StripeSDK\Requests\V1\Quotes\ByQuote\Post\AutomaticTaxRequest $automatic_tax;
    /**
     * Either `charge_automatically`, or `send_invoice`. When charging automatically, Stripe will attempt to pay invoices at the end of the subscription cycle or at invoice finalization using the default payment method attached to the subscription or customer. When sending an invoice, Stripe will email your customer an invoice with payment instructions and mark the subscription as `active`. Defaults to `charge_automatically`.
     */
    public \StripeSDK\Enums\V1\Quotes\ByQuote\Post\CollectionMethodEnum $collection_method;
    /**
     * The customer for which this quote belongs to. A customer is required before finalizing the quote. Once specified, it cannot be changed.
     */
    public string $customer {
        set {
            $this->assigning('customer', $value);
            $this->customer = $value;
        }
    }
    /**
     * The account for which this quote belongs to. A customer or account is required before finalizing the quote. Once specified, it cannot be changed.
     */
    public string $customer_account {
        set {
            $this->assigning('customer_account', $value);
            $this->customer_account = $value;
        }
    }
    /**
     * The tax rates that will apply to any line item that does not have `tax_rates` set.
     */
    public \StripeSDK\Requests\V1\Quotes\ByQuote\Post\TaxRatesRequest $default_tax_rates;
    /**
     * A description that will be displayed on the quote PDF.
     */
    public \StripeSDK\Requests\V1\Quotes\ByQuote\Post\ByQuoteDescriptionRequest $description;
    /**
     * The discounts applied to the quote.
     */
    public \StripeSDK\Requests\V1\Quotes\ByQuote\Post\ByQuoteDiscountsRequest $discounts;
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * A future timestamp on which the quote will be canceled if in `open` or `draft` status. Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public int $expires_at;
    /**
     * A footer that will be displayed on the quote PDF.
     */
    public \StripeSDK\Requests\V1\Quotes\ByQuote\Post\ByQuoteFooterRequest $footer;
    /**
     * A header that will be displayed on the quote PDF.
     */
    public \StripeSDK\Requests\V1\Quotes\ByQuote\Post\ByQuoteHeaderRequest $header;
    /**
     * All invoices will be billed using the specified settings.
     */
    public \StripeSDK\Requests\V1\Quotes\ByQuote\Post\InvoiceSettingsRequest $invoice_settings;
    /**
     * A list of line items the customer is being quoted for. Each line item includes information about the product, the quantity, and the resulting cost.
     */
    public \StripeSDK\Collections\V1\Quotes\ByQuote\Post\LineItemsCollection $line_items;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format. Individual keys can be unset by posting an empty value to them. All keys can be unset by posting an empty value to `metadata`.
     */
    public \StripeSDK\Requests\V1\Quotes\ByQuote\Post\MetadataMapRequest $metadata;
    /**
     * The account on behalf of which to charge.
     */
    public \StripeSDK\Requests\V1\Quotes\ByQuote\Post\OnBehalfRequest $on_behalf_of;
    /**
     * When creating a subscription or subscription schedule, the specified configuration data will be used. There must be at least one line item with a recurring price for a subscription or subscription schedule to be created. A subscription schedule is created if `subscription_data[effective_date]` is present and in the future, otherwise a subscription is created.
     */
    public \StripeSDK\Requests\V1\Quotes\ByQuote\Post\SubscriptionDataRequest $subscription_data;
    /**
     * The data with which to automatically create a Transfer for each of the invoices.
     */
    public \StripeSDK\Requests\V1\Quotes\ByQuote\Post\TransferDataRequest $transfer_data;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'collection_method' => is_string($value) ? $this->collection_method = \StripeSDK\Enums\V1\Quotes\ByQuote\Post\CollectionMethodEnum::from($value) : parent::assignMember($name, $value),
            'customer' => is_string($value) ? $this->customer = $value : parent::assignMember($name, $value),
            'customer_account' => is_string($value) ? $this->customer_account = $value : parent::assignMember($name, $value),
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'expires_at' => is_int($value) ? $this->expires_at = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
