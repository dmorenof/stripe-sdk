<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * Payment Link
 *
 * A payment link is a shareable URL that will take your customers to a hosted payment page. A payment link can be shared and used multiple times.
 *
 * When a customer opens a payment link it will open a new [checkout session](https://docs.stripe.com/api/checkout/sessions) to render the payment page. You can use [checkout session events](https://docs.stripe.com/api/events/types#event_types-checkout.session.completed) to track payments through payment links.
 *
 * Related guide: [Payment Links API](https://docs.stripe.com/payment-links)
 */
final class Link extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'active',
        'after_completion',
        'allow_promotion_codes',
        'automatic_tax',
        'billing_address_collection',
        'currency',
        'custom_fields',
        'custom_text',
        'customer_creation',
        'id',
        'livemode',
        'metadata',
        'object_',
        'payment_method_collection',
        'phone_number_collection',
        'shipping_options',
        'submit_type',
        'tax_id_collection',
        'url',
    ];

    protected const array PROPERTY_MAP = [
        'object' => 'object_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'object_' => 'object',
    ];

    protected const array VALIDATION = [
        'id' => [
            'maxLength' => 5000,
        ],
        'inactive_message' => [
            'maxLength' => 5000,
        ],
        'url' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Whether the payment link's `url` is active. If `false`, customers visiting the URL will be shown a page saying that the link has been deactivated.
     */
    public bool $active;
    public \StripeSDK\DTOs\Payment\LinksResourceAfterCompletion $after_completion;
    /**
     * Whether user redeemable promotion codes are enabled.
     */
    public bool $allow_promotion_codes;
    /**
     * The ID of the Connect application that created the Payment Link.
     */
    public ?\StripeSDK\DTOs\Payment\Link\ApplicationDTO $application;
    /**
     * The amount of the application fee (if any) that will be requested to be applied to the payment and transferred to the application owner's Stripe account.
     */
    public ?int $application_fee_amount;
    /**
     * This represents the percentage of the subscription invoice total that will be transferred to the application owner's Stripe account.
     */
    public ?float $application_fee_percent;
    public \StripeSDK\DTOs\Payment\LinksResourceAutomaticTax $automatic_tax;
    /**
     * Configuration for collecting the customer's billing address. Defaults to `auto`.
     */
    public \StripeSDK\Enums\Payment\Link\AddressCollectionEnum $billing_address_collection;
    /**
     * When set, provides configuration to gather active consent from customers.
     */
    public ?\StripeSDK\DTOs\Payment\LinksResourceConsentCollection $consent_collection;
    /**
     * Three-letter [ISO currency code](https://www.iso.org/iso-4217-currency-codes.html), in lowercase. Must be a [supported currency](https://stripe.com/docs/currencies).
     * Format: currency
     */
    public string $currency;
    /**
     * Collect additional information from your customer using custom fields. Up to 3 fields are supported. You can't set this parameter if `ui_mode` is `elements`.
     */
    public \StripeSDK\Collections\Payment\Link\CustomFieldsCollection $custom_fields;
    public \StripeSDK\DTOs\Payment\LinksResourceCustomText $custom_text;
    /**
     * Configuration for Customer creation during checkout.
     */
    public \StripeSDK\Enums\Payment\Link\CustomerCreationEnum $customer_creation;
    /**
     * Unique identifier for the object.
     */
    public string $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    /**
     * The custom message to be displayed to a customer when a payment link is no longer active.
     */
    public ?string $inactive_message {
        set {
            $this->assigning('inactive_message', $value);
            $this->inactive_message = $value;
        }
    }
    /**
     * Configuration for creating invoice for payment mode payment links.
     */
    public ?\StripeSDK\DTOs\Payment\LinksResourceInvoiceCreation $invoice_creation;
    /**
     * The line items representing what is being sold.
     */
    public \StripeSDK\DTOs\Payment\Link\LineItemsDTO $line_items;
    /**
     * If the object exists in live mode, the value is `true`. If the object exists in test mode, the value is `false`.
     */
    public bool $livemode;
    /**
     * Settings for Managed Payments for this Payment Link and resulting [CheckoutSessions](/api/checkout/sessions/object), [PaymentIntents](/api/payment_intents/object), [Invoices](/api/invoices/object), and [Subscriptions](/api/subscriptions/object).
     */
    public ?\StripeSDK\DTOs\Payment\PagesCheckoutSessionManagedPayments $managed_payments;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     */
    public \StripeSDK\DTOs\Payment\Link\MetadataMap $metadata;
    public \StripeSDK\DTOs\Payment\LinksResourceNameCollection $name_collection;
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\Payment\Link\ObjectEnum $object_;
    /**
     * The account on behalf of which to charge. See the [Connect documentation](https://support.stripe.com/questions/sending-invoices-on-behalf-of-connected-accounts) for details.
     */
    public ?\StripeSDK\DTOs\Payment\Link\OnBehalfDTO $on_behalf_of;
    /**
     * The optional items presented to the customer at checkout.
     */
    public ?\StripeSDK\Collections\Payment\Link\OptionalItemsCollection $optional_items;
    /**
     * Indicates the parameters to be passed to PaymentIntent creation during checkout.
     */
    public ?\StripeSDK\DTOs\Payment\LinksResourcePaymentIntentData $payment_intent_data;
    /**
     * Configuration for collecting a payment method during checkout. Defaults to `always`.
     */
    public \StripeSDK\Enums\Payment\Link\MethodCollectionEnum $payment_method_collection;
    /**
     * Payment-method-specific configuration.
     */
    public ?\StripeSDK\DTOs\Payment\LinksResourcePaymentMethodOptions $payment_method_options;
    /**
     * The list of payment method types that customers can use. When `null`, Stripe will dynamically show relevant payment methods you've enabled in your [payment method settings](https://dashboard.stripe.com/settings/payment_methods).
     */
    public ?\StripeSDK\Collections\Payment\Link\MethodTypesCollection $payment_method_types;
    public \StripeSDK\DTOs\Payment\LinksResourcePhoneNumberCollection $phone_number_collection;
    /**
     * Settings that restrict the usage of a payment link.
     */
    public ?\StripeSDK\DTOs\Payment\LinksResourceRestrictions $restrictions;
    /**
     * Configuration for collecting the customer's shipping address.
     */
    public ?\StripeSDK\DTOs\Payment\LinksResourceShippingAddressCollection $shipping_address_collection;
    /**
     * The shipping rate options applied to the session.
     */
    public \StripeSDK\Collections\Payment\Link\ShippingOptionsCollection $shipping_options;
    /**
     * Indicates the type of transaction being performed which customizes relevant text on the page, such as the submit button.
     */
    public \StripeSDK\Enums\Payment\Link\SubmitTypeEnum $submit_type;
    /**
     * When creating a subscription, the specified configuration data will be used. There must be at least one line item with a recurring price to use `subscription_data`.
     */
    public ?\StripeSDK\DTOs\Payment\LinksResourceSubscriptionData $subscription_data;
    public \StripeSDK\DTOs\Payment\LinksResourceTaxIdCollection $tax_id_collection;
    /**
     * The account (if any) the payments will be attributed to for tax reporting, and where funds from each payment will be transferred to.
     */
    public ?\StripeSDK\DTOs\Payment\LinksResourceTransferData $transfer_data;
    /**
     * The public URL that can be shared with customers.
     */
    public string $url {
        set {
            $this->assigning('url', $value);
            $this->url = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'active' => is_bool($value) ? $this->active = $value : parent::assignMember($name, $value),
            'after_completion' => $value instanceof \stdClass ? $this->after_completion = new \StripeSDK\DTOs\Payment\LinksResourceAfterCompletion($value) : parent::assignMember($name, $value),
            'allow_promotion_codes' => is_bool($value) ? $this->allow_promotion_codes = $value : parent::assignMember($name, $value),
            'application_fee_amount' => $value === null || is_int($value) ? $this->application_fee_amount = $value : parent::assignMember($name, $value),
            'application_fee_percent' => $value === null || is_float($value) ? $this->application_fee_percent = $value : parent::assignMember($name, $value),
            'automatic_tax' => $value instanceof \stdClass ? $this->automatic_tax = new \StripeSDK\DTOs\Payment\LinksResourceAutomaticTax($value) : parent::assignMember($name, $value),
            'billing_address_collection' => is_string($value) ? $this->billing_address_collection = \StripeSDK\Enums\Payment\Link\AddressCollectionEnum::from($value) : parent::assignMember($name, $value),
            'consent_collection' => $value === null || $value instanceof \stdClass ? $this->consent_collection = $value === null ? null : new \StripeSDK\DTOs\Payment\LinksResourceConsentCollection($value) : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'custom_fields' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->custom_fields = new \StripeSDK\Collections\Payment\Link\CustomFieldsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\Payment\LinksResourceCustomFields::class)) : parent::assignMember($name, $value),
            'custom_text' => $value instanceof \stdClass ? $this->custom_text = new \StripeSDK\DTOs\Payment\LinksResourceCustomText($value) : parent::assignMember($name, $value),
            'customer_creation' => is_string($value) ? $this->customer_creation = \StripeSDK\Enums\Payment\Link\CustomerCreationEnum::from($value) : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'inactive_message' => $value === null || is_string($value) ? $this->inactive_message = $value : parent::assignMember($name, $value),
            'invoice_creation' => $value === null || $value instanceof \stdClass ? $this->invoice_creation = $value === null ? null : new \StripeSDK\DTOs\Payment\LinksResourceInvoiceCreation($value) : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'managed_payments' => $value === null || $value instanceof \stdClass ? $this->managed_payments = $value === null ? null : new \StripeSDK\DTOs\Payment\PagesCheckoutSessionManagedPayments($value) : parent::assignMember($name, $value),
            'name_collection' => $value instanceof \stdClass ? $this->name_collection = new \StripeSDK\DTOs\Payment\LinksResourceNameCollection($value) : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Payment\Link\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'optional_items' => $value === null || (is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass)) ? $this->optional_items = $value === null ? null : new \StripeSDK\Collections\Payment\Link\OptionalItemsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\Payment\LinksResourceOptionalItem::class)) : parent::assignMember($name, $value),
            'payment_intent_data' => $value === null || $value instanceof \stdClass ? $this->payment_intent_data = $value === null ? null : new \StripeSDK\DTOs\Payment\LinksResourcePaymentIntentData($value) : parent::assignMember($name, $value),
            'payment_method_collection' => is_string($value) ? $this->payment_method_collection = \StripeSDK\Enums\Payment\Link\MethodCollectionEnum::from($value) : parent::assignMember($name, $value),
            'payment_method_options' => $value === null || $value instanceof \stdClass ? $this->payment_method_options = $value === null ? null : new \StripeSDK\DTOs\Payment\LinksResourcePaymentMethodOptions($value) : parent::assignMember($name, $value),
            'phone_number_collection' => $value instanceof \stdClass ? $this->phone_number_collection = new \StripeSDK\DTOs\Payment\LinksResourcePhoneNumberCollection($value) : parent::assignMember($name, $value),
            'restrictions' => $value === null || $value instanceof \stdClass ? $this->restrictions = $value === null ? null : new \StripeSDK\DTOs\Payment\LinksResourceRestrictions($value) : parent::assignMember($name, $value),
            'shipping_address_collection' => $value === null || $value instanceof \stdClass ? $this->shipping_address_collection = $value === null ? null : new \StripeSDK\DTOs\Payment\LinksResourceShippingAddressCollection($value) : parent::assignMember($name, $value),
            'shipping_options' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->shipping_options = new \StripeSDK\Collections\Payment\Link\ShippingOptionsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\Payment\LinksResourceShippingOption::class)) : parent::assignMember($name, $value),
            'submit_type' => is_string($value) ? $this->submit_type = \StripeSDK\Enums\Payment\Link\SubmitTypeEnum::from($value) : parent::assignMember($name, $value),
            'subscription_data' => $value === null || $value instanceof \stdClass ? $this->subscription_data = $value === null ? null : new \StripeSDK\DTOs\Payment\LinksResourceSubscriptionData($value) : parent::assignMember($name, $value),
            'tax_id_collection' => $value instanceof \stdClass ? $this->tax_id_collection = new \StripeSDK\DTOs\Payment\LinksResourceTaxIdCollection($value) : parent::assignMember($name, $value),
            'transfer_data' => $value === null || $value instanceof \stdClass ? $this->transfer_data = $value === null ? null : new \StripeSDK\DTOs\Payment\LinksResourceTransferData($value) : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
