<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Invoices\CreatePreview;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'customer' => [
            'maxLength' => 5000,
        ],
        'customer_account' => [
            'maxLength' => 5000,
        ],
        'schedule' => [
            'maxLength' => 5000,
        ],
        'subscription' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Settings for automatic tax lookup for this invoice preview.
     */
    public \StripeSDK\Requests\V1\Invoices\CreatePreview\Post\AutomaticTaxRequest $automatic_tax;
    /**
     * The currency to preview this invoice in. Defaults to that of `customer` if not specified.
     * Format: currency
     */
    public string $currency;
    /**
     * The identifier of the customer whose upcoming invoice you're retrieving. If `automatic_tax` is enabled then one of `customer`, `customer_details`, `subscription`, or `schedule` must be set.
     */
    public string $customer {
        set {
            $this->assigning('customer', $value);
            $this->customer = $value;
        }
    }
    /**
     * The identifier of the account representing the customer whose upcoming invoice you're retrieving. If `automatic_tax` is enabled then one of `customer`, `customer_account`, `customer_details`, `subscription`, or `schedule` must be set.
     */
    public string $customer_account {
        set {
            $this->assigning('customer_account', $value);
            $this->customer_account = $value;
        }
    }
    /**
     * Details about the customer you want to invoice or overrides for an existing customer. If `automatic_tax` is enabled then one of `customer`, `customer_details`, `subscription`, or `schedule` must be set.
     */
    public \StripeSDK\Requests\V1\Invoices\CreatePreview\Post\CustomerDetailsRequest $customer_details;
    /**
     * The coupons to redeem into discounts for the invoice preview. If not specified, inherits the discount from the subscription or customer. This works for both coupons directly applied to an invoice and coupons applied to a subscription. Pass an empty string to avoid inheriting any discounts.
     */
    public \StripeSDK\Requests\V1\Invoices\CreatePreview\Post\CreatePreviewDiscountsRequest $discounts;
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * List of invoice items to add or update in the upcoming invoice preview (up to 250).
     */
    public \StripeSDK\Collections\V1\Invoices\CreatePreview\Post\InvoiceItemsCollection $invoice_items;
    /**
     * The connected account that issues the invoice. The invoice is presented with the branding and support information of the specified account.
     */
    public \StripeSDK\Requests\V1\Invoices\CreatePreview\Post\CreatePreviewIssuerRequest $issuer;
    /**
     * The account (if any) for which the funds of the invoice payment are intended. If set, the invoice will be presented with the branding and support information of the specified account. See the [Invoices with Connect](https://docs.stripe.com/billing/invoices/connect) documentation for details.
     */
    public \StripeSDK\Requests\V1\Invoices\CreatePreview\Post\OnBehalfRequest $on_behalf_of;
    /**
     * Customizes the types of values to include when calculating the invoice. Defaults to `next` if unspecified.
     */
    public \StripeSDK\Enums\V1\Invoices\CreatePreview\Post\PreviewModeEnum $preview_mode;
    /**
     * The identifier of the schedule whose upcoming invoice you'd like to retrieve. Cannot be used with subscription or subscription fields.
     */
    public string $schedule {
        set {
            $this->assigning('schedule', $value);
            $this->schedule = $value;
        }
    }
    /**
     * The schedule creation or modification params to apply as a preview. Cannot be used with `subscription` or `subscription_` prefixed fields.
     */
    public \StripeSDK\Requests\V1\Invoices\CreatePreview\Post\ScheduleDetailsRequest $schedule_details;
    /**
     * The identifier of the subscription for which you'd like to retrieve the upcoming invoice. If not provided, but a `subscription_details.items` is provided, you will preview creating a subscription with those items. If neither `subscription` nor `subscription_details.items` is provided, you will retrieve the next upcoming invoice from among the customer's subscriptions.
     */
    public string $subscription {
        set {
            $this->assigning('subscription', $value);
            $this->subscription = $value;
        }
    }
    /**
     * The subscription creation or modification params to apply as a preview. Cannot be used with `schedule` or `schedule_details` fields.
     */
    public \StripeSDK\Requests\V1\Invoices\CreatePreview\Post\SubscriptionDetailsRequest $subscription_details;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'customer' => is_string($value) ? $this->customer = $value : parent::assignMember($name, $value),
            'customer_account' => is_string($value) ? $this->customer_account = $value : parent::assignMember($name, $value),
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'preview_mode' => is_string($value) ? $this->preview_mode = \StripeSDK\Enums\V1\Invoices\CreatePreview\Post\PreviewModeEnum::from($value) : parent::assignMember($name, $value),
            'schedule' => is_string($value) ? $this->schedule = $value : parent::assignMember($name, $value),
            'subscription' => is_string($value) ? $this->subscription = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
