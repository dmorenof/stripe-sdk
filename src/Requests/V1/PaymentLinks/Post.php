<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentLinks;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'line_items',
    ];

    protected const array VALIDATION = [
        'inactive_message' => [
            'maxLength' => 500,
        ],
    ];

    /**
     * Behavior after the purchase is complete.
     */
    public \StripeSDK\Requests\V1\PaymentLinks\Post\AfterCompletionRequest $after_completion;
    /**
     * Enables user redeemable promotion codes.
     */
    public bool $allow_promotion_codes;
    /**
     * The amount of the application fee (if any) that will be requested to be applied to the payment and transferred to the application owner's Stripe account. Can only be applied when there are no line items with recurring prices.
     */
    public int $application_fee_amount;
    /**
     * A non-negative decimal between 0 and 100, with at most two decimal places. This represents the percentage of the subscription invoice total that will be transferred to the application owner's Stripe account. There must be at least 1 line item with a recurring price to use this field.
     */
    public float $application_fee_percent;
    /**
     * Configuration for automatic tax collection.
     */
    public \StripeSDK\Requests\V1\PaymentLinks\Post\AutomaticTaxRequest $automatic_tax;
    /**
     * Configuration for collecting the customer's billing address. Defaults to `auto`.
     */
    public \StripeSDK\Enums\V1\PaymentLinks\Post\AddressCollectionEnum $billing_address_collection;
    /**
     * Configure fields to gather active consent from customers.
     */
    public \StripeSDK\Requests\V1\PaymentLinks\Post\ConsentCollectionRequest $consent_collection;
    /**
     * Three-letter [ISO currency code](https://www.iso.org/iso-4217-currency-codes.html), in lowercase. Must be a [supported currency](https://stripe.com/docs/currencies) and supported by each line item's price.
     * Format: currency
     */
    public string $currency;
    /**
     * Collect additional information from your customer using custom fields. Up to 3 fields are supported. You can't set this parameter if `ui_mode` is `elements`.
     */
    public \StripeSDK\Collections\V1\PaymentLinks\Post\CustomFieldsCollection $custom_fields;
    /**
     * Display additional text for your customers using custom text. You can't set this parameter if `ui_mode` is `elements`.
     */
    public \StripeSDK\Requests\V1\PaymentLinks\Post\CustomTextRequest $custom_text;
    /**
     * Configures whether [checkout sessions](https://docs.stripe.com/api/checkout/sessions) created by this payment link create a [Customer](https://docs.stripe.com/api/customers).
     */
    public \StripeSDK\Enums\V1\PaymentLinks\Post\CustomerCreationEnum $customer_creation;
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * The custom message to be displayed to a customer when a payment link is no longer active.
     */
    public string $inactive_message {
        set {
            $this->assigning('inactive_message', $value);
            $this->inactive_message = $value;
        }
    }
    /**
     * Generate a post-purchase Invoice for one-time payments.
     */
    public \StripeSDK\Requests\V1\PaymentLinks\Post\InvoiceCreationRequest $invoice_creation;
    /**
     * The line items representing what is being sold. Each line item represents an item being sold. Up to 20 line items are supported.
     */
    public \StripeSDK\Collections\V1\PaymentLinks\Post\LineItemsCollection $line_items;
    /**
     * Settings for Managed Payments for this Payment Link and resulting [CheckoutSessions](/api/checkout/sessions/object), [PaymentIntents](/api/payment_intents/object), [Invoices](/api/invoices/object), and [Subscriptions](/api/subscriptions/object).
     */
    public \StripeSDK\Requests\V1\PaymentLinks\Post\ManagedPaymentsRequest $managed_payments;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format. Individual keys can be unset by posting an empty value to them. All keys can be unset by posting an empty value to `metadata`. Metadata associated with this Payment Link will automatically be copied to [checkout sessions](https://docs.stripe.com/api/checkout/sessions) created by this payment link.
     */
    public \StripeSDK\Requests\V1\PaymentLinks\Post\MetadataMapRequest $metadata;
    /**
     * Controls settings applied for collecting the customer's name.
     */
    public \StripeSDK\Requests\V1\PaymentLinks\Post\NameCollectionRequest $name_collection;
    /**
     * The account on behalf of which to charge.
     */
    public string $on_behalf_of;
    /**
     * A list of optional items the customer can add to their order at checkout. Use this parameter to pass one-time or recurring [Prices](https://docs.stripe.com/api/prices).
     * There is a maximum of 10 optional items allowed on a payment link, and the existing limits on the number of line items allowed on a payment link apply to the combined number of line items and optional items.
     * There is a maximum of 20 combined line items and optional items.
     */
    public \StripeSDK\Collections\V1\PaymentLinks\Post\OptionalItemsCollection $optional_items;
    /**
     * A subset of parameters to be passed to PaymentIntent creation for Checkout Sessions in `payment` mode.
     */
    public \StripeSDK\Requests\V1\PaymentLinks\Post\IntentDataRequest $payment_intent_data;
    /**
     * Specify whether Checkout should collect a payment method. When set to `if_required`, Checkout will not collect a payment method when the total due for the session is 0.This may occur if the Checkout Session includes a free trial or a discount.
     *
     * Can only be set in `subscription` mode. Defaults to `always`.
     *
     * If you'd like information on how to collect a payment method outside of Checkout, read the guide on [configuring subscriptions with a free trial](https://docs.stripe.com/payments/checkout/free-trials).
     */
    public \StripeSDK\Enums\V1\PaymentLinks\Post\MethodCollectionEnum $payment_method_collection;
    /**
     * Payment-method-specific configuration.
     */
    public \StripeSDK\Requests\V1\PaymentLinks\Post\MethodOptionsRequest $payment_method_options;
    /**
     * The list of payment method types that customers can use. If no value is passed, Stripe will dynamically show relevant payment methods from your [payment method settings](https://dashboard.stripe.com/settings/payment_methods) (20+ payment methods [supported](https://docs.stripe.com/payments/payment-methods/integration-options#payment-method-product-support)).
     */
    public \StripeSDK\Collections\V1\PaymentLinks\Post\MethodTypesCollection $payment_method_types;
    /**
     * Controls phone number collection settings during checkout.
     *
     * We recommend that you review your privacy policy and check with your legal contacts.
     */
    public \StripeSDK\Requests\V1\PaymentLinks\Post\NumberCollectionRequest $phone_number_collection;
    /**
     * Settings that restrict the usage of a payment link.
     */
    public \StripeSDK\Requests\V1\PaymentLinks\Post\PaymentLinksRestrictionsRequest $restrictions;
    /**
     * Configuration for collecting the customer's shipping address.
     */
    public \StripeSDK\Requests\V1\PaymentLinks\Post\AddressCollectionRequest $shipping_address_collection;
    /**
     * The shipping rate options to apply to [checkout sessions](https://docs.stripe.com/api/checkout/sessions) created by this payment link.
     */
    public \StripeSDK\Collections\V1\PaymentLinks\Post\ShippingOptionsCollection $shipping_options;
    /**
     * Describes the type of transaction being performed in order to customize relevant text on the page, such as the submit button. Changing this value will also affect the hostname in the [url](https://docs.stripe.com/api/payment_links/payment_links/object#url) property (example: `donate.stripe.com`).
     */
    public \StripeSDK\Enums\V1\PaymentLinks\Post\SubmitTypeEnum $submit_type;
    /**
     * When creating a subscription, the specified configuration data will be used. There must be at least one line item with a recurring price to use `subscription_data`.
     */
    public \StripeSDK\Requests\V1\PaymentLinks\Post\SubscriptionDataRequest $subscription_data;
    /**
     * Controls tax ID collection during checkout.
     */
    public \StripeSDK\Requests\V1\PaymentLinks\Post\IdCollectionRequest $tax_id_collection;
    /**
     * The account (if any) the payments will be attributed to for tax reporting, and where funds from each payment will be transferred to.
     */
    public \StripeSDK\Requests\V1\PaymentLinks\Post\TransferDataRequest $transfer_data;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'allow_promotion_codes' => is_bool($value) ? $this->allow_promotion_codes = $value : parent::assignMember($name, $value),
            'application_fee_amount' => is_int($value) ? $this->application_fee_amount = $value : parent::assignMember($name, $value),
            'application_fee_percent' => is_float($value) ? $this->application_fee_percent = $value : parent::assignMember($name, $value),
            'billing_address_collection' => is_string($value) ? $this->billing_address_collection = \StripeSDK\Enums\V1\PaymentLinks\Post\AddressCollectionEnum::from($value) : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'customer_creation' => is_string($value) ? $this->customer_creation = \StripeSDK\Enums\V1\PaymentLinks\Post\CustomerCreationEnum::from($value) : parent::assignMember($name, $value),
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'inactive_message' => is_string($value) ? $this->inactive_message = $value : parent::assignMember($name, $value),
            'on_behalf_of' => is_string($value) ? $this->on_behalf_of = $value : parent::assignMember($name, $value),
            'payment_method_collection' => is_string($value) ? $this->payment_method_collection = \StripeSDK\Enums\V1\PaymentLinks\Post\MethodCollectionEnum::from($value) : parent::assignMember($name, $value),
            'submit_type' => is_string($value) ? $this->submit_type = \StripeSDK\Enums\V1\PaymentLinks\Post\SubmitTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
