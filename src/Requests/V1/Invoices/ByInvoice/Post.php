<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Invoices\ByInvoice;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'default_payment_method' => [
            'maxLength' => 5000,
        ],
        'description' => [
            'maxLength' => 1500,
        ],
        'footer' => [
            'maxLength' => 5000,
        ],
        'statement_descriptor' => [
            'maxLength' => 22,
        ],
    ];

    /**
     * The account tax IDs associated with the invoice. Only editable when the invoice is a draft.
     */
    public \StripeSDK\Requests\V1\Invoices\ByInvoice\Post\TaxIdsRequest $account_tax_ids;
    /**
     * A fee in cents (or local equivalent) that will be applied to the invoice and transferred to the application owner's Stripe account. The request must be made with an OAuth key or the Stripe-Account header in order to take an application fee. For more information, see the application fees [documentation](https://docs.stripe.com/billing/invoices/connect#collecting-fees).
     */
    public int $application_fee_amount;
    /**
     * Controls whether Stripe performs [automatic collection](https://docs.stripe.com/invoicing/integration/automatic-advancement-collection) of the invoice.
     */
    public bool $auto_advance;
    /**
     * Settings for automatic tax lookup for this invoice.
     */
    public \StripeSDK\Requests\V1\Invoices\ByInvoice\Post\AutomaticTaxRequest $automatic_tax;
    /**
     * The time when this invoice should be scheduled to finalize (up to 5 years in the future). The invoice is finalized at this time if it's still in draft state. To turn off automatic finalization, set `auto_advance` to false.
     * Format: unix-time
     */
    public int $automatically_finalizes_at;
    /**
     * Either `charge_automatically` or `send_invoice`. This field can be updated only on `draft` invoices.
     */
    public \StripeSDK\Enums\V1\Invoices\ByInvoice\Post\CollectionMethodEnum $collection_method;
    /**
     * A list of up to 4 custom fields to be displayed on the invoice. If a value for `custom_fields` is specified, the list specified will replace the existing custom field list on this invoice. Pass an empty string to remove previously-defined fields.
     */
    public \StripeSDK\Requests\V1\Invoices\ByInvoice\Post\CustomFieldsRequest $custom_fields;
    /**
     * The number of days from which the invoice is created until it is due. Only valid for invoices where `collection_method=send_invoice`. This field can only be updated on `draft` invoices.
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
    public \StripeSDK\Requests\V1\Invoices\ByInvoice\Post\DefaultSourceRequest $default_source;
    /**
     * The tax rates that will apply to any line item that does not have `tax_rates` set. Pass an empty string to remove previously-defined tax rates.
     */
    public \StripeSDK\Requests\V1\Invoices\ByInvoice\Post\TaxRatesRequest $default_tax_rates;
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
     * The discounts that will apply to the invoice. Pass an empty string to remove previously-defined discounts.
     */
    public \StripeSDK\Requests\V1\Invoices\ByInvoice\Post\ByInvoiceDiscountsRequest $discounts;
    /**
     * The date on which payment for this invoice is due. Only valid for invoices where `collection_method=send_invoice`. This field can only be updated on `draft` invoices.
     * Format: unix-time
     */
    public int $due_date;
    /**
     * The date when this invoice is in effect. Same as `finalized_at` unless overwritten. When defined, this value replaces the system-generated 'Date of issue' printed on the invoice PDF and receipt.
     */
    public \StripeSDK\Requests\V1\Invoices\ByInvoice\Post\EffectiveAtRequest $effective_at;
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
     * The connected account that issues the invoice. The invoice is presented with the branding and support information of the specified account.
     */
    public \StripeSDK\Requests\V1\Invoices\ByInvoice\Post\ByInvoiceIssuerRequest $issuer;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format. Individual keys can be unset by posting an empty value to them. All keys can be unset by posting an empty value to `metadata`.
     */
    public \StripeSDK\Requests\V1\Invoices\ByInvoice\Post\ByInvoiceMetadataRequest $metadata;
    /**
     * Set the number for this invoice. If no number is present then a number will be assigned automatically when the invoice is finalized. In many markets, regulations require invoices to be unique, sequential and / or gapless. You are responsible for ensuring this is true across all your different invoicing systems in the event that you edit the invoice number using our API. If you use only Stripe for your invoices and do not change invoice numbers, Stripe handles this aspect of compliance for you automatically.
     */
    public \StripeSDK\Requests\V1\Invoices\ByInvoice\Post\ByInvoiceNumberRequest $number;
    /**
     * The account (if any) for which the funds of the invoice payment are intended. If set, the invoice will be presented with the branding and support information of the specified account. See the [Invoices with Connect](https://docs.stripe.com/billing/invoices/connect) documentation for details.
     */
    public \StripeSDK\Requests\V1\Invoices\ByInvoice\Post\OnBehalfRequest $on_behalf_of;
    /**
     * Configuration settings for the PaymentIntent that is generated when the invoice is finalized.
     */
    public \StripeSDK\Requests\V1\Invoices\ByInvoice\Post\PaymentSettingsRequest $payment_settings;
    /**
     * The rendering-related settings that control how invoices render in customer-facing interfaces such as the PDF or hosted invoice page.
     */
    public \StripeSDK\Requests\V1\Invoices\ByInvoice\Post\ByInvoiceRenderingRequest $rendering;
    /**
     * Settings for the cost of shipping for this invoice.
     */
    public \StripeSDK\Requests\V1\Invoices\ByInvoice\Post\ShippingCostRequest $shipping_cost;
    /**
     * Shipping details for the invoice. The Invoice PDF will use the `shipping_details` value if it is set, otherwise the PDF will render the shipping address from the customer.
     */
    public \StripeSDK\Requests\V1\Invoices\ByInvoice\Post\ShippingDetailsRequest $shipping_details;
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
     * If specified, the funds from the invoice will be transferred to the destination and the ID of the resulting transfer will be found on the invoice's charge. This will be unset if you POST an empty value.
     */
    public \StripeSDK\Requests\V1\Invoices\ByInvoice\Post\TransferDataRequest $transfer_data;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'application_fee_amount' => is_int($value) ? $this->application_fee_amount = $value : parent::assignMember($name, $value),
            'auto_advance' => is_bool($value) ? $this->auto_advance = $value : parent::assignMember($name, $value),
            'automatically_finalizes_at' => is_int($value) ? $this->automatically_finalizes_at = $value : parent::assignMember($name, $value),
            'collection_method' => is_string($value) ? $this->collection_method = \StripeSDK\Enums\V1\Invoices\ByInvoice\Post\CollectionMethodEnum::from($value) : parent::assignMember($name, $value),
            'days_until_due' => is_int($value) ? $this->days_until_due = $value : parent::assignMember($name, $value),
            'default_payment_method' => is_string($value) ? $this->default_payment_method = $value : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'due_date' => is_int($value) ? $this->due_date = $value : parent::assignMember($name, $value),
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'footer' => is_string($value) ? $this->footer = $value : parent::assignMember($name, $value),
            'statement_descriptor' => is_string($value) ? $this->statement_descriptor = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
