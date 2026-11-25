<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Invoices;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'customer' => [
            'maxLength' => 5000,
        ],
        'customer_account' => [
            'maxLength' => 5000,
        ],
        'default_payment_method' => [
            'maxLength' => 5000,
        ],
        'default_source' => [
            'maxLength' => 5000,
        ],
        'description' => [
            'maxLength' => 1500,
        ],
        'footer' => [
            'maxLength' => 5000,
        ],
        'number' => [
            'maxLength' => 26,
        ],
        'statement_descriptor' => [
            'maxLength' => 22,
        ],
        'subscription' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The account tax IDs associated with the invoice. Only editable when the invoice is a draft.
     */
    public \StripeSDK\Requests\V1\Invoices\Post\TaxIdsRequest $account_tax_ids;
    /**
     * A fee in cents (or local equivalent) that will be applied to the invoice and transferred to the application owner's Stripe account. The request must be made with an OAuth key or the Stripe-Account header in order to take an application fee. For more information, see the application fees [documentation](https://docs.stripe.com/billing/invoices/connect#collecting-fees).
     */
    public int $application_fee_amount;
    /**
     * Controls whether Stripe performs [automatic collection](https://docs.stripe.com/invoicing/integration/automatic-advancement-collection) of the invoice. If `false`, the invoice's state doesn't automatically advance without an explicit action. Defaults to false.
     */
    public bool $auto_advance;
    /**
     * Settings for automatic tax lookup for this invoice.
     */
    public \StripeSDK\Requests\V1\Invoices\Post\AutomaticTaxRequest $automatic_tax;
    /**
     * The time when this invoice should be scheduled to finalize (up to 5 years in the future). The invoice is finalized at this time if it's still in draft state.
     * Format: unix-time
     */
    public int $automatically_finalizes_at;
    /**
     * Either `charge_automatically`, or `send_invoice`. When charging automatically, Stripe will attempt to pay this invoice using the default source attached to the customer. When sending an invoice, Stripe will email this invoice to the customer with payment instructions. Defaults to `charge_automatically`.
     */
    public \StripeSDK\Enums\V1\Invoices\Post\CollectionMethodEnum $collection_method;
    /**
     * The currency to create this invoice in. Defaults to that of `customer` if not specified.
     * Format: currency
     */
    public string $currency;
    /**
     * A list of up to 4 custom fields to be displayed on the invoice.
     */
    public \StripeSDK\Requests\V1\Invoices\Post\CustomFieldsRequest $custom_fields;
    /**
     * The ID of the customer to bill.
     */
    public string $customer {
        set {
            $this->assigning('customer', $value);
            $this->customer = $value;
        }
    }
    /**
     * The ID of the account to bill.
     */
    public string $customer_account {
        set {
            $this->assigning('customer_account', $value);
            $this->customer_account = $value;
        }
    }
    /**
     * The number of days from when the invoice is created until it is due. Valid only for invoices where `collection_method=send_invoice`.
     */
    public int $days_until_due;
    /**
     * ID of the default payment method for the invoice. It must belong to the customer associated with the invoice. If not set, defaults to the subscription's default payment method, if any, or to the default payment method in the customer's invoice settings.
     */
    public string $default_payment_method {
        set {
            $this->assigning('default_payment_method', $value);
            $this->default_payment_method = $value;
        }
    }
    /**
     * ID of the default payment source for the invoice. It must belong to the customer associated with the invoice and be in a chargeable state. If not set, defaults to the subscription's default source, if any, or to the customer's default source.
     */
    public string $default_source {
        set {
            $this->assigning('default_source', $value);
            $this->default_source = $value;
        }
    }
    /**
     * The tax rates that will apply to any line item that does not have `tax_rates` set.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $default_tax_rates;
    /**
     * An arbitrary string attached to the object. Often useful for displaying to users. Referenced as 'memo' in the Dashboard.
     */
    public string $description {
        set {
            $this->assigning('description', $value);
            $this->description = $value;
        }
    }
    /**
     * The coupons and promotion codes to redeem into discounts for the invoice. If not specified, inherits the discount from the invoice's customer. Pass an empty string to avoid inheriting any discounts.
     */
    public \StripeSDK\Requests\V1\Invoices\Post\InvoicesDiscountsRequest $discounts;
    /**
     * The date on which payment for this invoice is due. Valid only for invoices where `collection_method=send_invoice`.
     * Format: unix-time
     */
    public int $due_date;
    /**
     * The date when this invoice is in effect. Same as `finalized_at` unless overwritten. When defined, this value replaces the system-generated 'Date of issue' printed on the invoice PDF and receipt.
     * Format: unix-time
     */
    public int $effective_at;
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * Footer to be displayed on the invoice.
     */
    public string $footer {
        set {
            $this->assigning('footer', $value);
            $this->footer = $value;
        }
    }
    /**
     * Revise an existing invoice. The new invoice will be created in `status=draft`. See the [revision documentation](https://docs.stripe.com/invoicing/invoice-revisions) for more details.
     */
    public \StripeSDK\Requests\V1\Invoices\Post\FromInvoiceRequest $from_invoice;
    /**
     * The connected account that issues the invoice. The invoice is presented with the branding and support information of the specified account.
     */
    public \StripeSDK\Requests\V1\Invoices\Post\InvoicesIssuerRequest $issuer;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format. Individual keys can be unset by posting an empty value to them. All keys can be unset by posting an empty value to `metadata`.
     */
    public \StripeSDK\Requests\V1\Invoices\Post\InvoicesMetadataRequest $metadata;
    /**
     * Set the number for this invoice. If no number is present then a number will be assigned automatically when the invoice is finalized. In many markets, regulations require invoices to be unique, sequential and / or gapless. You are responsible for ensuring this is true across all your different invoicing systems in the event that you edit the invoice number using our API. If you use only Stripe for your invoices and do not change invoice numbers, Stripe handles this aspect of compliance for you automatically.
     */
    public string $number {
        set {
            $this->assigning('number', $value);
            $this->number = $value;
        }
    }
    /**
     * The account (if any) for which the funds of the invoice payment are intended. If set, the invoice will be presented with the branding and support information of the specified account. See the [Invoices with Connect](https://docs.stripe.com/billing/invoices/connect) documentation for details.
     */
    public string $on_behalf_of;
    /**
     * Configuration settings for the PaymentIntent that is generated when the invoice is finalized.
     */
    public \StripeSDK\Requests\V1\Invoices\Post\PaymentSettingsRequest $payment_settings;
    /**
     * How to handle pending invoice items on invoice creation. Defaults to `exclude` if the parameter is omitted.
     */
    public \StripeSDK\Enums\V1\Invoices\Post\ItemsBehaviorEnum $pending_invoice_items_behavior;
    /**
     * The rendering-related settings that control how invoices render in customer-facing interfaces such as the PDF or hosted invoice page.
     */
    public \StripeSDK\Requests\V1\Invoices\Post\InvoicesRenderingRequest $rendering;
    /**
     * Settings for the cost of shipping for this invoice.
     */
    public \StripeSDK\Requests\V1\Invoices\Post\ShippingCostRequest $shipping_cost;
    /**
     * Shipping details for the invoice. The Invoice PDF will use the `shipping_details` value if it is set, otherwise the PDF will render the shipping address from the customer.
     */
    public \StripeSDK\Requests\V1\Invoices\Post\ShippingDetailsRequest $shipping_details;
    /**
     * Extra information about a charge for the customer's credit card statement. It must contain at least one letter. If not specified and this invoice is part of a subscription, the default `statement_descriptor` will be set to the first subscription item's product's `statement_descriptor`.
     */
    public string $statement_descriptor {
        set {
            $this->assigning('statement_descriptor', $value);
            $this->statement_descriptor = $value;
        }
    }
    /**
     * The ID of the subscription to invoice, if any. If set, the created invoice will only include pending invoice items for that subscription. The subscription's billing cycle and regular subscription events won't be affected.
     */
    public string $subscription {
        set {
            $this->assigning('subscription', $value);
            $this->subscription = $value;
        }
    }
    /**
     * If specified, the funds from the invoice will be transferred to the destination and the ID of the resulting transfer will be found on the invoice's charge.
     */
    public \StripeSDK\Requests\V1\Invoices\Post\TransferDataRequest $transfer_data;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'application_fee_amount' => is_int($value) ? $this->application_fee_amount = $value : parent::assignMember($name, $value),
            'auto_advance' => is_bool($value) ? $this->auto_advance = $value : parent::assignMember($name, $value),
            'automatically_finalizes_at' => is_int($value) ? $this->automatically_finalizes_at = $value : parent::assignMember($name, $value),
            'collection_method' => is_string($value) ? $this->collection_method = \StripeSDK\Enums\V1\Invoices\Post\CollectionMethodEnum::from($value) : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'customer' => is_string($value) ? $this->customer = $value : parent::assignMember($name, $value),
            'customer_account' => is_string($value) ? $this->customer_account = $value : parent::assignMember($name, $value),
            'days_until_due' => is_int($value) ? $this->days_until_due = $value : parent::assignMember($name, $value),
            'default_payment_method' => is_string($value) ? $this->default_payment_method = $value : parent::assignMember($name, $value),
            'default_source' => is_string($value) ? $this->default_source = $value : parent::assignMember($name, $value),
            'default_tax_rates' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->default_tax_rates = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'due_date' => is_int($value) ? $this->due_date = $value : parent::assignMember($name, $value),
            'effective_at' => is_int($value) ? $this->effective_at = $value : parent::assignMember($name, $value),
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'footer' => is_string($value) ? $this->footer = $value : parent::assignMember($name, $value),
            'number' => is_string($value) ? $this->number = $value : parent::assignMember($name, $value),
            'on_behalf_of' => is_string($value) ? $this->on_behalf_of = $value : parent::assignMember($name, $value),
            'pending_invoice_items_behavior' => is_string($value) ? $this->pending_invoice_items_behavior = \StripeSDK\Enums\V1\Invoices\Post\ItemsBehaviorEnum::from($value) : parent::assignMember($name, $value),
            'statement_descriptor' => is_string($value) ? $this->statement_descriptor = $value : parent::assignMember($name, $value),
            'subscription' => is_string($value) ? $this->subscription = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
