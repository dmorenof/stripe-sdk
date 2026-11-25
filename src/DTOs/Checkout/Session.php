<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Checkout;

/**
 * Checkout Session
 *
 * A Checkout Session represents your customer's session as they pay for
 * one-time purchases or subscriptions through [Checkout](https://docs.stripe.com/payments/checkout)
 * or [Payment Links](https://docs.stripe.com/payments/payment-links). We recommend creating a
 * new Session each time your customer attempts to pay.
 *
 * Once payment is successful, the Checkout Session will contain a reference
 * to the [Customer](https://docs.stripe.com/api/customers), and either the successful
 * [PaymentIntent](https://docs.stripe.com/api/payment_intents) or an active
 * [Subscription](https://docs.stripe.com/api/subscriptions).
 *
 * You can create a Checkout Session on your server and redirect to its URL
 * to begin Checkout.
 *
 * Related guide: [Checkout quickstart](https://docs.stripe.com/checkout/quickstart)
 */
final class Session extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'automatic_tax',
        'created',
        'custom_fields',
        'custom_text',
        'expires_at',
        'id',
        'livemode',
        'mode',
        'object_',
        'payment_method_types',
        'payment_status',
        'shipping_options',
    ];

    protected const array PROPERTY_MAP = [
        'object' => 'object_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'object_' => 'object',
    ];

    protected const array VALIDATION = [
        'cancel_url' => [
            'maxLength' => 5000,
        ],
        'client_reference_id' => [
            'maxLength' => 5000,
        ],
        'client_secret' => [
            'maxLength' => 5000,
        ],
        'customer_account' => [
            'maxLength' => 5000,
        ],
        'customer_email' => [
            'maxLength' => 5000,
        ],
        'id' => [
            'maxLength' => 5000,
        ],
        'integration_identifier' => [
            'maxLength' => 5000,
        ],
        'recovered_from' => [
            'maxLength' => 5000,
        ],
        'return_url' => [
            'maxLength' => 5000,
        ],
        'success_url' => [
            'maxLength' => 5000,
        ],
        'url' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Settings for price localization with [Adaptive Pricing](https://docs.stripe.com/payments/checkout/adaptive-pricing).
     */
    public ?\StripeSDK\DTOs\Payment\PagesCheckoutSessionAdaptivePricing $adaptive_pricing;
    /**
     * When set, provides configuration for actions to take if this Checkout Session expires.
     */
    public ?\StripeSDK\DTOs\Payment\PagesCheckoutSessionAfterExpiration $after_expiration;
    /**
     * Enables user redeemable promotion codes.
     */
    public ?bool $allow_promotion_codes;
    /**
     * A list of the types of payment methods (e.g., `card`) this Checkout Session can accept.
     */
    public ?\StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $allowed_payment_method_types;
    /**
     * Total of all items before discounts or taxes are applied.
     */
    public ?int $amount_subtotal;
    /**
     * Total of all items after discounts and taxes are applied.
     */
    public ?int $amount_total;
    public \StripeSDK\DTOs\Payment\PagesCheckoutSessionAutomaticTax $automatic_tax;
    /**
     * Describes whether Checkout should collect the customer's billing address. Defaults to `auto`.
     */
    public ?\StripeSDK\Enums\Checkout\Session\AddressCollectionEnum $billing_address_collection;
    public \StripeSDK\DTOs\Payment\PagesCheckoutSessionBrandingSettings $branding_settings;
    /**
     * If set, Checkout displays a back button and customers will be directed to this URL if they decide to cancel payment and return to your website.
     */
    public ?string $cancel_url {
        set {
            $this->assigning('cancel_url', $value);
            $this->cancel_url = $value;
        }
    }
    /**
     * A unique string to reference the Checkout Session. This can be a
     * customer ID, a cart ID, or similar, and can be used to reconcile the
     * Session with your internal systems.
     */
    public ?string $client_reference_id {
        set {
            $this->assigning('client_reference_id', $value);
            $this->client_reference_id = $value;
        }
    }
    /**
     * The client secret of your Checkout Session. Applies to Checkout Sessions with `ui_mode: embedded_page` or `ui_mode: elements`. For `ui_mode: embedded_page`, the client secret is to be used when initializing Stripe.js embedded checkout.
     *  For `ui_mode: elements`, use the client secret with [initCheckout](https://docs.stripe.com/js/custom_checkout/init) on your front end.
     */
    public ?string $client_secret {
        set {
            $this->assigning('client_secret', $value);
            $this->client_secret = $value;
        }
    }
    /**
     * Information about the customer collected within the Checkout Session.
     */
    public ?\StripeSDK\DTOs\Payment\PagesCheckoutSessionCollectedInformation $collected_information;
    /**
     * Results of `consent_collection` for this session.
     */
    public ?\StripeSDK\DTOs\Payment\PagesCheckoutSessionConsent $consent;
    /**
     * When set, provides configuration for the Checkout Session to gather active consent from customers.
     */
    public ?\StripeSDK\DTOs\Payment\PagesCheckoutSessionConsentCollection $consent_collection;
    /**
     * Time at which the object was created. Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public int $created;
    /**
     * Three-letter [ISO currency code](https://www.iso.org/iso-4217-currency-codes.html), in lowercase. Must be a [supported currency](https://stripe.com/docs/currencies).
     * Format: currency
     */
    public ?string $currency;
    /**
     * Currency conversion details for [Adaptive Pricing](https://docs.stripe.com/payments/checkout/adaptive-pricing) sessions created before 2025-03-31.
     */
    public ?\StripeSDK\DTOs\Payment\PagesCheckoutSessionCurrencyConversion $currency_conversion;
    /**
     * Collect additional information from your customer using custom fields. Up to 3 fields are supported. You can't set this parameter if `ui_mode` is `elements`.
     */
    public \StripeSDK\Collections\Checkout\Session\CustomFieldsCollection $custom_fields;
    public \StripeSDK\DTOs\Payment\PagesCheckoutSessionCustomText $custom_text;
    /**
     * The ID of the customer for this Session.
     * For Checkout Sessions in `subscription` mode or Checkout Sessions with `customer_creation` set as `always` in `payment` mode, Checkout
     * will create a new customer object based on information provided
     * during the payment flow unless an existing customer was provided when
     * the Session was created.
     */
    public ?\StripeSDK\DTOs\Checkout\Session\CustomerDTO $customer;
    /**
     * The ID of the account for this Session.
     */
    public ?string $customer_account {
        set {
            $this->assigning('customer_account', $value);
            $this->customer_account = $value;
        }
    }
    /**
     * Configure whether a Checkout Session creates a Customer when the Checkout Session completes.
     */
    public ?\StripeSDK\Enums\Checkout\Session\CustomerCreationEnum $customer_creation;
    /**
     * The customer details including the customer's tax exempt status and the customer's tax IDs. Customer's address details are not present on Sessions in `setup` mode.
     */
    public ?\StripeSDK\DTOs\Payment\PagesCheckoutSessionCustomerDetails $customer_details;
    /**
     * If provided, this value will be used when the Customer object is created.
     * If not provided, customers will be asked to enter their email address.
     * Use this parameter to prefill customer data if you already have an email
     * on file. To access information about the customer once the payment flow is
     * complete, use the `customer` attribute.
     */
    public ?string $customer_email {
        set {
            $this->assigning('customer_email', $value);
            $this->customer_email = $value;
        }
    }
    /**
     * List of coupons and promotion codes attached to the Checkout Session.
     */
    public ?\StripeSDK\Collections\Checkout\Session\DiscountsCollection $discounts;
    /**
     * A list of the types of payment methods (e.g., `card`) that should be excluded from this Checkout Session. This should only be used when payment methods for this Checkout Session are managed through the [Stripe Dashboard](https://dashboard.stripe.com/settings/payment_methods).
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $excluded_payment_method_types;
    /**
     * The timestamp at which the Checkout Session will expire.
     * Format: unix-time
     */
    public int $expires_at;
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
     * The integration identifier for this Checkout Session. Multiple Checkout Sessions can have the same integration identifier.
     */
    public ?string $integration_identifier {
        set {
            $this->assigning('integration_identifier', $value);
            $this->integration_identifier = $value;
        }
    }
    /**
     * ID of the invoice created by the Checkout Session, if it exists.
     */
    public ?\StripeSDK\DTOs\Checkout\Session\InvoiceDTO $invoice;
    /**
     * Details on the state of invoice creation for the Checkout Session.
     */
    public ?\StripeSDK\DTOs\Payment\PagesCheckoutSessionInvoiceCreation $invoice_creation;
    /**
     * The line items purchased by the customer.
     */
    public \StripeSDK\DTOs\Checkout\Session\LineItemsDTO $line_items;
    /**
     * If the object exists in live mode, the value is `true`. If the object exists in test mode, the value is `false`.
     */
    public bool $livemode;
    /**
     * The IETF language tag of the locale Checkout is displayed in. If blank or `auto`, the browser's locale is used.
     */
    public ?\StripeSDK\Enums\Checkout\Session\LocaleEnum $locale;
    /**
     * Settings for Managed Payments for this Checkout Session and resulting [PaymentIntents](/api/payment_intents/object), [Invoices](/api/invoices/object), and [Subscriptions](/api/subscriptions/object).
     */
    public ?\StripeSDK\DTOs\Payment\PagesCheckoutSessionManagedPayments $managed_payments;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     */
    public ?\StripeSDK\DTOs\Checkout\Session\MetadataMap $metadata;
    /**
     * The mode of the Checkout Session.
     */
    public \StripeSDK\Enums\Checkout\Session\ModeEnum $mode;
    public \StripeSDK\DTOs\Payment\PagesCheckoutSessionNameCollection $name_collection;
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\Checkout\Session\ObjectEnum $object_;
    /**
     * The optional items presented to the customer at checkout.
     */
    public ?\StripeSDK\Collections\Checkout\Session\OptionalItemsCollection $optional_items;
    /**
     * Where the user is coming from. This informs the optimizations that are applied to the session.
     */
    public ?\StripeSDK\Enums\Checkout\Session\OriginContextEnum $origin_context;
    /**
     * The ID of the PaymentIntent for Checkout Sessions in `payment` mode. You can't confirm or cancel the PaymentIntent for a Checkout Session. To cancel, [expire the Checkout Session](https://docs.stripe.com/api/checkout/sessions/expire) instead.
     */
    public ?\StripeSDK\DTOs\Checkout\Session\PaymentIntentDTO $payment_intent;
    /**
     * The ID of the Payment Link that created this Session.
     */
    public ?\StripeSDK\DTOs\Checkout\Session\PaymentLinkDTO $payment_link;
    /**
     * Configure whether a Checkout Session should collect a payment method for sessions with mode `payment`. Defaults to `always`.
     */
    public ?\StripeSDK\Enums\Checkout\Session\MethodCollectionEnum $payment_method_collection;
    /**
     * Information about the payment method configuration used for this Checkout session if using dynamic payment methods.
     */
    public ?\StripeSDK\DTOs\Payment\MethodConfigBizPaymentMethodConfigurationDetails $payment_method_configuration_details;
    /**
     * Payment-method-specific configuration for the PaymentIntent or SetupIntent of this CheckoutSession.
     */
    public ?\StripeSDK\DTOs\Checkout\SessionPaymentMethodOptions $payment_method_options;
    /**
     * A list of the types of payment methods (e.g. card) this Checkout
     * Session is allowed to accept.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $payment_method_types;
    /**
     * The payment status of the Checkout Session, one of `paid`, `unpaid`, or `no_payment_required`.
     * You can use this value to decide when to fulfill your customer's order.
     */
    public \StripeSDK\Enums\Checkout\Session\PaymentStatusEnum $payment_status;
    /**
     * This property is used to set up permissions for various actions (e.g., update) on the CheckoutSession object.
     *
     * For specific permissions, please refer to their dedicated subsections, such as `permissions.update_shipping_details`.
     */
    public ?\StripeSDK\DTOs\Payment\PagesCheckoutSessionPermissions $permissions;
    public \StripeSDK\DTOs\Payment\PagesCheckoutSessionPhoneNumberCollection $phone_number_collection;
    public \StripeSDK\DTOs\Payment\FlowsPaymentIntentPresentmentDetails $presentment_details;
    /**
     * The ID of the original expired Checkout Session that triggered the recovery flow.
     */
    public ?string $recovered_from {
        set {
            $this->assigning('recovered_from', $value);
            $this->recovered_from = $value;
        }
    }
    /**
     * This parameter applies to `ui_mode: embedded_page`. Learn more about the [redirect behavior](https://docs.stripe.com/payments/checkout/custom-success-page?payment-ui=embedded-form) of embedded sessions. Defaults to `always`.
     */
    public \StripeSDK\Enums\Checkout\Session\OnCompletionEnum $redirect_on_completion;
    /**
     * Applies to Checkout Sessions with `ui_mode: embedded_page` or `ui_mode: elements`. The URL to redirect your customer back to after they authenticate or cancel their payment on the payment method's app or site.
     */
    public string $return_url {
        set {
            $this->assigning('return_url', $value);
            $this->return_url = $value;
        }
    }
    /**
     * Controls saved payment method settings for the session. Only available in `payment` and `subscription` mode.
     */
    public ?\StripeSDK\DTOs\Payment\PagesCheckoutSessionSavedPaymentMethodOptions $saved_payment_method_options;
    /**
     * The ID of the SetupIntent for Checkout Sessions in `setup` mode. You can't confirm or cancel the SetupIntent for a Checkout Session. To cancel, [expire the Checkout Session](https://docs.stripe.com/api/checkout/sessions/expire) instead.
     */
    public ?\StripeSDK\DTOs\Checkout\Session\SetupIntentDTO $setup_intent;
    /**
     * When set, provides configuration for Checkout to collect a shipping address from a customer.
     */
    public ?\StripeSDK\DTOs\Payment\PagesCheckoutSessionShippingAddressCollection $shipping_address_collection;
    /**
     * The details of the customer cost of shipping, including the customer chosen ShippingRate.
     */
    public ?\StripeSDK\DTOs\Payment\PagesCheckoutSessionShippingCost $shipping_cost;
    /**
     * The shipping rate options applied to this Session.
     */
    public \StripeSDK\Collections\Checkout\Session\ShippingOptionsCollection $shipping_options;
    /**
     * The status of the Checkout Session, one of `open`, `complete`, or `expired`.
     */
    public ?\StripeSDK\Enums\Checkout\Session\StatusEnum $status;
    /**
     * Describes the type of transaction being performed by Checkout in order to customize
     * relevant text on the page, such as the submit button. `submit_type` can only be
     * specified on Checkout Sessions in `payment` mode. If blank or `auto`, `pay` is used.
     */
    public ?\StripeSDK\Enums\Checkout\Session\SubmitTypeEnum $submit_type;
    /**
     * The ID of the [Subscription](https://docs.stripe.com/api/subscriptions) for Checkout Sessions in `subscription` mode.
     */
    public ?\StripeSDK\DTOs\Checkout\Session\SubscriptionDTO $subscription;
    /**
     * The URL the customer will be directed to after the payment or
     * subscription creation is successful.
     */
    public ?string $success_url {
        set {
            $this->assigning('success_url', $value);
            $this->success_url = $value;
        }
    }
    public \StripeSDK\DTOs\Payment\PagesCheckoutSessionTaxIdCollection $tax_id_collection;
    /**
     * Tax and discount details for the computed total amount.
     */
    public ?\StripeSDK\DTOs\Payment\PagesCheckoutSessionTotalDetails $total_details;
    /**
     * The UI mode of the Session. Defaults to `hosted_page`.
     */
    public ?\StripeSDK\Enums\Checkout\Session\UiModeEnum $ui_mode;
    /**
     * The URL to the Checkout Session. Applies to Checkout Sessions with `ui_mode: hosted_page`. Redirect customers to this URL to take them to Checkout. If you’re using [Custom Domains](https://docs.stripe.com/payments/checkout/custom-domains), the URL will use your subdomain. Otherwise, it’ll use `checkout.stripe.com.`
     * This value is only present when the session is active.
     */
    public ?string $url {
        set {
            $this->assigning('url', $value);
            $this->url = $value;
        }
    }
    /**
     * Wallet-specific configuration for this Checkout Session.
     */
    public ?\StripeSDK\DTOs\Checkout\SessionWalletOptions $wallet_options;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'adaptive_pricing' => $value === null || $value instanceof \stdClass ? $this->adaptive_pricing = $value === null ? null : new \StripeSDK\DTOs\Payment\PagesCheckoutSessionAdaptivePricing($value) : parent::assignMember($name, $value),
            'after_expiration' => $value === null || $value instanceof \stdClass ? $this->after_expiration = $value === null ? null : new \StripeSDK\DTOs\Payment\PagesCheckoutSessionAfterExpiration($value) : parent::assignMember($name, $value),
            'allow_promotion_codes' => $value === null || is_bool($value) ? $this->allow_promotion_codes = $value : parent::assignMember($name, $value),
            'allowed_payment_method_types' => $value === null || (is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item))) ? $this->allowed_payment_method_types = $value === null ? null : new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'amount_subtotal' => $value === null || is_int($value) ? $this->amount_subtotal = $value : parent::assignMember($name, $value),
            'amount_total' => $value === null || is_int($value) ? $this->amount_total = $value : parent::assignMember($name, $value),
            'automatic_tax' => $value instanceof \stdClass ? $this->automatic_tax = new \StripeSDK\DTOs\Payment\PagesCheckoutSessionAutomaticTax($value) : parent::assignMember($name, $value),
            'billing_address_collection' => $value === null || is_string($value) ? $this->billing_address_collection = $value === null ? null : \StripeSDK\Enums\Checkout\Session\AddressCollectionEnum::from($value) : parent::assignMember($name, $value),
            'branding_settings' => $value instanceof \stdClass ? $this->branding_settings = new \StripeSDK\DTOs\Payment\PagesCheckoutSessionBrandingSettings($value) : parent::assignMember($name, $value),
            'cancel_url' => $value === null || is_string($value) ? $this->cancel_url = $value : parent::assignMember($name, $value),
            'client_reference_id' => $value === null || is_string($value) ? $this->client_reference_id = $value : parent::assignMember($name, $value),
            'client_secret' => $value === null || is_string($value) ? $this->client_secret = $value : parent::assignMember($name, $value),
            'collected_information' => $value === null || $value instanceof \stdClass ? $this->collected_information = $value === null ? null : new \StripeSDK\DTOs\Payment\PagesCheckoutSessionCollectedInformation($value) : parent::assignMember($name, $value),
            'consent' => $value === null || $value instanceof \stdClass ? $this->consent = $value === null ? null : new \StripeSDK\DTOs\Payment\PagesCheckoutSessionConsent($value) : parent::assignMember($name, $value),
            'consent_collection' => $value === null || $value instanceof \stdClass ? $this->consent_collection = $value === null ? null : new \StripeSDK\DTOs\Payment\PagesCheckoutSessionConsentCollection($value) : parent::assignMember($name, $value),
            'created' => is_int($value) ? $this->created = $value : parent::assignMember($name, $value),
            'currency' => $value === null || is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'currency_conversion' => $value === null || $value instanceof \stdClass ? $this->currency_conversion = $value === null ? null : new \StripeSDK\DTOs\Payment\PagesCheckoutSessionCurrencyConversion($value) : parent::assignMember($name, $value),
            'custom_fields' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->custom_fields = new \StripeSDK\Collections\Checkout\Session\CustomFieldsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\Payment\PagesCheckoutSessionCustomFields::class)) : parent::assignMember($name, $value),
            'custom_text' => $value instanceof \stdClass ? $this->custom_text = new \StripeSDK\DTOs\Payment\PagesCheckoutSessionCustomText($value) : parent::assignMember($name, $value),
            'customer_account' => $value === null || is_string($value) ? $this->customer_account = $value : parent::assignMember($name, $value),
            'customer_creation' => $value === null || is_string($value) ? $this->customer_creation = $value === null ? null : \StripeSDK\Enums\Checkout\Session\CustomerCreationEnum::from($value) : parent::assignMember($name, $value),
            'customer_details' => $value === null || $value instanceof \stdClass ? $this->customer_details = $value === null ? null : new \StripeSDK\DTOs\Payment\PagesCheckoutSessionCustomerDetails($value) : parent::assignMember($name, $value),
            'customer_email' => $value === null || is_string($value) ? $this->customer_email = $value : parent::assignMember($name, $value),
            'discounts' => $value === null || (is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass)) ? $this->discounts = $value === null ? null : new \StripeSDK\Collections\Checkout\Session\DiscountsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\Payment\PagesCheckoutSessionDiscount::class)) : parent::assignMember($name, $value),
            'excluded_payment_method_types' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->excluded_payment_method_types = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'expires_at' => is_int($value) ? $this->expires_at = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'integration_identifier' => $value === null || is_string($value) ? $this->integration_identifier = $value : parent::assignMember($name, $value),
            'invoice_creation' => $value === null || $value instanceof \stdClass ? $this->invoice_creation = $value === null ? null : new \StripeSDK\DTOs\Payment\PagesCheckoutSessionInvoiceCreation($value) : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'locale' => $value === null || is_string($value) ? $this->locale = $value === null ? null : \StripeSDK\Enums\Checkout\Session\LocaleEnum::from($value) : parent::assignMember($name, $value),
            'managed_payments' => $value === null || $value instanceof \stdClass ? $this->managed_payments = $value === null ? null : new \StripeSDK\DTOs\Payment\PagesCheckoutSessionManagedPayments($value) : parent::assignMember($name, $value),
            'mode' => is_string($value) ? $this->mode = \StripeSDK\Enums\Checkout\Session\ModeEnum::from($value) : parent::assignMember($name, $value),
            'name_collection' => $value instanceof \stdClass ? $this->name_collection = new \StripeSDK\DTOs\Payment\PagesCheckoutSessionNameCollection($value) : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Checkout\Session\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'optional_items' => $value === null || (is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass)) ? $this->optional_items = $value === null ? null : new \StripeSDK\Collections\Checkout\Session\OptionalItemsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\Payment\PagesCheckoutSessionOptionalItem::class)) : parent::assignMember($name, $value),
            'origin_context' => $value === null || is_string($value) ? $this->origin_context = $value === null ? null : \StripeSDK\Enums\Checkout\Session\OriginContextEnum::from($value) : parent::assignMember($name, $value),
            'payment_method_collection' => $value === null || is_string($value) ? $this->payment_method_collection = $value === null ? null : \StripeSDK\Enums\Checkout\Session\MethodCollectionEnum::from($value) : parent::assignMember($name, $value),
            'payment_method_configuration_details' => $value === null || $value instanceof \stdClass ? $this->payment_method_configuration_details = $value === null ? null : new \StripeSDK\DTOs\Payment\MethodConfigBizPaymentMethodConfigurationDetails($value) : parent::assignMember($name, $value),
            'payment_method_options' => $value === null || $value instanceof \stdClass ? $this->payment_method_options = $value === null ? null : new \StripeSDK\DTOs\Checkout\SessionPaymentMethodOptions($value) : parent::assignMember($name, $value),
            'payment_method_types' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->payment_method_types = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'payment_status' => is_string($value) ? $this->payment_status = \StripeSDK\Enums\Checkout\Session\PaymentStatusEnum::from($value) : parent::assignMember($name, $value),
            'permissions' => $value === null || $value instanceof \stdClass ? $this->permissions = $value === null ? null : new \StripeSDK\DTOs\Payment\PagesCheckoutSessionPermissions($value) : parent::assignMember($name, $value),
            'phone_number_collection' => $value instanceof \stdClass ? $this->phone_number_collection = new \StripeSDK\DTOs\Payment\PagesCheckoutSessionPhoneNumberCollection($value) : parent::assignMember($name, $value),
            'presentment_details' => $value instanceof \stdClass ? $this->presentment_details = new \StripeSDK\DTOs\Payment\FlowsPaymentIntentPresentmentDetails($value) : parent::assignMember($name, $value),
            'recovered_from' => $value === null || is_string($value) ? $this->recovered_from = $value : parent::assignMember($name, $value),
            'redirect_on_completion' => is_string($value) ? $this->redirect_on_completion = \StripeSDK\Enums\Checkout\Session\OnCompletionEnum::from($value) : parent::assignMember($name, $value),
            'return_url' => is_string($value) ? $this->return_url = $value : parent::assignMember($name, $value),
            'saved_payment_method_options' => $value === null || $value instanceof \stdClass ? $this->saved_payment_method_options = $value === null ? null : new \StripeSDK\DTOs\Payment\PagesCheckoutSessionSavedPaymentMethodOptions($value) : parent::assignMember($name, $value),
            'shipping_address_collection' => $value === null || $value instanceof \stdClass ? $this->shipping_address_collection = $value === null ? null : new \StripeSDK\DTOs\Payment\PagesCheckoutSessionShippingAddressCollection($value) : parent::assignMember($name, $value),
            'shipping_cost' => $value === null || $value instanceof \stdClass ? $this->shipping_cost = $value === null ? null : new \StripeSDK\DTOs\Payment\PagesCheckoutSessionShippingCost($value) : parent::assignMember($name, $value),
            'shipping_options' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->shipping_options = new \StripeSDK\Collections\Checkout\Session\ShippingOptionsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\Payment\PagesCheckoutSessionShippingOption::class)) : parent::assignMember($name, $value),
            'status' => $value === null || is_string($value) ? $this->status = $value === null ? null : \StripeSDK\Enums\Checkout\Session\StatusEnum::from($value) : parent::assignMember($name, $value),
            'submit_type' => $value === null || is_string($value) ? $this->submit_type = $value === null ? null : \StripeSDK\Enums\Checkout\Session\SubmitTypeEnum::from($value) : parent::assignMember($name, $value),
            'success_url' => $value === null || is_string($value) ? $this->success_url = $value : parent::assignMember($name, $value),
            'tax_id_collection' => $value instanceof \stdClass ? $this->tax_id_collection = new \StripeSDK\DTOs\Payment\PagesCheckoutSessionTaxIdCollection($value) : parent::assignMember($name, $value),
            'total_details' => $value === null || $value instanceof \stdClass ? $this->total_details = $value === null ? null : new \StripeSDK\DTOs\Payment\PagesCheckoutSessionTotalDetails($value) : parent::assignMember($name, $value),
            'ui_mode' => $value === null || is_string($value) ? $this->ui_mode = $value === null ? null : \StripeSDK\Enums\Checkout\Session\UiModeEnum::from($value) : parent::assignMember($name, $value),
            'url' => $value === null || is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            'wallet_options' => $value === null || $value instanceof \stdClass ? $this->wallet_options = $value === null ? null : new \StripeSDK\DTOs\Checkout\SessionWalletOptions($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
