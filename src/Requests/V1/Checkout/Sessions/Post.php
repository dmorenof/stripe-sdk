<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Checkout\Sessions;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'client_reference_id' => [
            'maxLength' => 200,
        ],
        'customer' => [
            'maxLength' => 5000,
        ],
        'customer_account' => [
            'maxLength' => 5000,
        ],
        'integration_identifier' => [
            'maxLength' => 200,
        ],
        'payment_method_configuration' => [
            'maxLength' => 100,
        ],
    ];

    /**
     * Settings for price localization with [Adaptive Pricing](https://docs.stripe.com/payments/checkout/adaptive-pricing).
     */
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\AdaptivePricingRequest $adaptive_pricing;
    /**
     * Configure actions after a Checkout Session has expired. You can't set this parameter if `ui_mode` is `elements`.
     */
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\AfterExpirationRequest $after_expiration;
    /**
     * Enables user redeemable promotion codes.
     */
    public bool $allow_promotion_codes;
    /**
     * A list of the types of payment methods (e.g., `card`) this Checkout Session can accept.
     *
     * Unlike `payment_method_types`, this acts as a filter on the dynamically computed set of
     * eligible payment methods rather than an explicit static list. Only payment methods that
     * are both dynamically eligible and present in this list will be offered to the customer.
     */
    public \StripeSDK\Collections\V1\Checkout\Sessions\Post\MethodTypesCollection $allowed_payment_method_types;
    /**
     * Settings for automatic tax lookup for this session and resulting payments, invoices, and subscriptions.
     */
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\AutomaticTaxRequest $automatic_tax;
    /**
     * Specify whether Checkout should collect the customer's billing address. Defaults to `auto`.
     */
    public \StripeSDK\Enums\V1\Checkout\Sessions\Post\AddressCollectionEnum $billing_address_collection;
    /**
     * The branding settings for the Checkout Session. This parameter is not allowed if ui_mode is `elements`.
     */
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\BrandingSettingsRequest $branding_settings;
    /**
     * If set, Checkout displays a back button and customers will be directed to this URL if they decide to cancel payment and return to your website. This parameter is not allowed if ui_mode is `embedded_page` or `elements`.
     */
    public string $cancel_url;
    /**
     * A unique string to reference the Checkout Session. This can be a
     * customer ID, a cart ID, or similar, and can be used to reconcile the
     * session with your internal systems.
     */
    public string $client_reference_id {
        set {
            $this->assigning('client_reference_id', $value);
            $this->client_reference_id = $value;
        }
    }
    /**
     * Configure fields for the Checkout Session to gather active consent from customers.
     */
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\ConsentCollectionRequest $consent_collection;
    /**
     * Three-letter [ISO currency code](https://www.iso.org/iso-4217-currency-codes.html), in lowercase. Must be a [supported currency](https://stripe.com/docs/currencies). Required in `setup` mode when `payment_method_types` is not set.
     * Format: currency
     */
    public string $currency;
    /**
     * Collect additional information from your customer using custom fields. Up to 3 fields are supported. You can't set this parameter if `ui_mode` is `elements`.
     */
    public \StripeSDK\Collections\V1\Checkout\Sessions\Post\CustomFieldsCollection $custom_fields;
    /**
     * Display additional text for your customers using custom text. You can't set this parameter if `ui_mode` is `elements`.
     */
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\CustomTextRequest $custom_text;
    /**
     * ID of an existing Customer, if one exists. In `payment` mode, the customer’s most recently saved card
     * payment method will be used to prefill the email, name, card details, and billing address
     * on the Checkout page. In `subscription` mode, the customer’s [default payment method](https://docs.stripe.com/api/customers/update#update_customer-invoice_settings-default_payment_method)
     * will be used if it’s a card, otherwise the most recently saved card will be used. A valid billing address, billing name and billing email are required on the payment method for Checkout to prefill the customer's card details.
     *
     * If the Customer already has a valid [email](https://docs.stripe.com/api/customers/object#customer_object-email) set, the email will be prefilled and not editable in Checkout.
     * If the Customer does not have a valid `email`, Checkout will set the email entered during the session on the Customer.
     *
     * If blank for Checkout Sessions in `subscription` mode or with `customer_creation` set as `always` in `payment` mode, Checkout will create a new Customer object based on information provided during the payment flow.
     *
     * You can set [`payment_intent_data.setup_future_usage`](https://docs.stripe.com/api/checkout/sessions/create#create_checkout_session-payment_intent_data-setup_future_usage) to have Checkout automatically attach the payment method to the Customer you pass in for future reuse.
     */
    public string $customer {
        set {
            $this->assigning('customer', $value);
            $this->customer = $value;
        }
    }
    /**
     * ID of an existing Account, if one exists. Has the same behavior as `customer`.
     */
    public string $customer_account {
        set {
            $this->assigning('customer_account', $value);
            $this->customer_account = $value;
        }
    }
    /**
     * Configure whether a Checkout Session creates a [Customer](https://docs.stripe.com/api/customers) during Session confirmation.
     *
     * When a Customer is not created, you can still retrieve email, address, and other customer data entered in Checkout
     * with [customer_details](https://docs.stripe.com/api/checkout/sessions/object#checkout_session_object-customer_details).
     *
     * Sessions that don't create Customers instead are grouped by [guest customers](https://docs.stripe.com/payments/checkout/guest-customers)
     * in the Dashboard. Promotion codes limited to first time customers will return invalid for these Sessions.
     *
     * Can only be set in `payment` and `setup` mode.
     */
    public \StripeSDK\Enums\V1\Checkout\Sessions\Post\CustomerCreationEnum $customer_creation;
    /**
     * If provided, this value will be used when the Customer object is created.
     * If not provided, customers will be asked to enter their email address.
     * Use this parameter to prefill customer data if you already have an email
     * on file. To access information about the customer once a session is
     * complete, use the `customer` field.
     */
    public string $customer_email;
    /**
     * Controls what fields on Customer can be updated by the Checkout Session. Can only be provided when `customer` is provided.
     */
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\CustomerUpdateRequest $customer_update;
    /**
     * The coupon or promotion code to apply to this Session. Currently, only up to one may be specified.
     */
    public \StripeSDK\Collections\V1\Checkout\Sessions\Post\SessionsDiscountsCollection $discounts;
    /**
     * A list of the types of payment methods (e.g., `card`) that should be excluded from this Checkout Session. This should only be used when payment methods for this Checkout Session are managed through the [Stripe Dashboard](https://dashboard.stripe.com/settings/payment_methods).
     */
    public \StripeSDK\Collections\V1\Checkout\Sessions\Post\ExcludedPaymentMethodTypesArray\MethodTypesCollection $excluded_payment_method_types;
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * The Epoch time in seconds at which the Checkout Session will expire. It can be anywhere from 30 minutes to 24 hours after Checkout Session creation. By default, this value is 24 hours from creation.
     * Format: unix-time
     */
    public int $expires_at;
    /**
     * The integration identifier for this Checkout Session. Multiple Checkout Sessions can have the same integration identifier.
     */
    public string $integration_identifier {
        set {
            $this->assigning('integration_identifier', $value);
            $this->integration_identifier = $value;
        }
    }
    /**
     * Generate a post-purchase Invoice for one-time payments.
     */
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\InvoiceCreationRequest $invoice_creation;
    /**
     * A list of items the customer is purchasing. Use this parameter to pass one-time or recurring [Prices](https://docs.stripe.com/api/prices). The parameter is required for `payment` and `subscription` mode.
     *
     * For `payment` mode, there is a maximum of 100 line items, however it is recommended to consolidate line items if there are more than a few dozen.
     *
     * For `subscription` mode, there is a maximum of 20 line items with recurring Prices and 20 line items with one-time Prices. Line items with one-time Prices will be on the initial invoice only.
     */
    public \StripeSDK\Collections\V1\Checkout\Sessions\Post\LineItemsCollection $line_items;
    /**
     * The IETF language tag of the locale Checkout is displayed in. If blank or `auto`, the browser's locale is used.
     */
    public \StripeSDK\Enums\V1\Checkout\Sessions\Post\SessionsLocaleEnum $locale;
    /**
     * Settings for Managed Payments for this Checkout Session and resulting [PaymentIntents](/api/payment_intents/object), [Invoices](/api/invoices/object), and [Subscriptions](/api/subscriptions/object).
     */
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\ManagedPaymentsRequest $managed_payments;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format. Individual keys can be unset by posting an empty value to them. All keys can be unset by posting an empty value to `metadata`.
     */
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\MetadataMapRequest $metadata;
    /**
     * The mode of the Checkout Session. Pass `subscription` if the Checkout Session includes at least one recurring item.
     */
    public \StripeSDK\Enums\V1\Checkout\Sessions\Post\SessionsModeEnum $mode;
    /**
     * Controls name collection settings for the session.
     *
     * You can configure Checkout to collect your customers' business names, individual names, or both. Each name field can be either required or optional.
     *
     * If a [Customer](https://docs.stripe.com/api/customers) is created or provided, the names can be saved to the Customer object as well.
     */
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\NameCollectionRequest $name_collection;
    /**
     * A list of optional items the customer can add to their order at checkout. Use this parameter to pass one-time or recurring [Prices](https://docs.stripe.com/api/prices).
     *
     * There is a maximum of 10 optional items allowed on a Checkout Session, and the existing limits on the number of line items allowed on a Checkout Session apply to the combined number of line items and optional items.
     *
     * For `payment` mode, there is a maximum of 100 combined line items and optional items, however it is recommended to consolidate items if there are more than a few dozen.
     *
     * For `subscription` mode, there is a maximum of 20 line items and optional items with recurring Prices and 20 line items and optional items with one-time Prices.
     *
     * You can't set this parameter if `ui_mode` is `elements` or `form`.
     */
    public \StripeSDK\Collections\V1\Checkout\Sessions\Post\OptionalItemsCollection $optional_items;
    /**
     * Where the user is coming from. This informs the optimizations that are applied to the session. You can't set this parameter if `ui_mode` is `elements`.
     */
    public \StripeSDK\Enums\V1\Checkout\Sessions\Post\OriginContextEnum $origin_context;
    /**
     * A subset of parameters to be passed to PaymentIntent creation for Checkout Sessions in `payment` mode.
     */
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\IntentDataRequest $payment_intent_data;
    /**
     * Specify whether Checkout should collect a payment method. When set to `if_required`, Checkout will not collect a payment method when the total due for the session is 0.
     * This may occur if the Checkout Session includes a free trial or a discount.
     *
     * Can only be set in `subscription` mode. Defaults to `always`.
     *
     * If you'd like information on how to collect a payment method outside of Checkout, read the guide on configuring [subscriptions with a free trial](https://docs.stripe.com/payments/checkout/free-trials).
     */
    public \StripeSDK\Enums\V1\Checkout\Sessions\Post\MethodCollectionEnum $payment_method_collection;
    /**
     * The ID of the payment method configuration to use with this Checkout session.
     */
    public string $payment_method_configuration {
        set {
            $this->assigning('payment_method_configuration', $value);
            $this->payment_method_configuration = $value;
        }
    }
    /**
     * This parameter allows you to set some attributes on the payment method created during a Checkout session.
     */
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\MethodDataRequest $payment_method_data;
    /**
     * Payment-method-specific configuration.
     */
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\MethodOptionsRequest $payment_method_options;
    /**
     * This property is used to set up permissions for various actions (for example, update) on the CheckoutSession object. Can only be set when creating `embedded_page` or `elements` sessions.
     *
     * For specific permissions, please refer to their dedicated subsections, such as `permissions.update_shipping_details`.
     */
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\SessionsPermissionsRequest $permissions;
    /**
     * Controls phone number collection settings for the session.
     *
     * We recommend that you review your privacy policy and check with your legal contacts
     * before using this feature. Learn more about [collecting phone numbers with Checkout](https://docs.stripe.com/payments/checkout/phone-numbers).
     */
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\NumberCollectionRequest $phone_number_collection;
    /**
     * This parameter applies to `ui_mode: embedded_page`. Learn more about the [redirect behavior](https://docs.stripe.com/payments/checkout/custom-success-page?payment-ui=embedded-form) of embedded sessions. Defaults to `always`.
     */
    public \StripeSDK\Enums\V1\Checkout\Sessions\Post\OnCompletionEnum $redirect_on_completion;
    /**
     * The URL to redirect your customer back to after they authenticate or cancel their payment on the
     * payment method's app or site. This parameter is required if `ui_mode` is `embedded_page` or `elements`
     * and redirect-based payment methods are enabled on the session.
     */
    public string $return_url;
    /**
     * Controls saved payment method settings for the session. Only available in `payment` and `subscription` mode.
     */
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\SavedPaymentMethodOptions\MethodOptionsRequest $saved_payment_method_options;
    /**
     * A subset of parameters to be passed to SetupIntent creation for Checkout Sessions in `setup` mode.
     */
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\SetupIntentData\IntentDataRequest $setup_intent_data;
    /**
     * When set, provides configuration for Checkout to collect a shipping address from a customer.
     */
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\AddressCollectionRequest $shipping_address_collection;
    /**
     * The shipping rate options to apply to this Session. Up to a maximum of 5.
     */
    public \StripeSDK\Collections\V1\Checkout\Sessions\Post\ShippingOptionsCollection $shipping_options;
    /**
     * Describes the type of transaction being performed by Checkout in order
     * to customize relevant text on the page, such as the submit button.
     *  `submit_type` can only be specified on Checkout Sessions in
     * `payment` or `subscription` mode. If blank or `auto`, `pay` is used.
     * You can't set this parameter if `ui_mode` is `elements`.
     */
    public \StripeSDK\Enums\V1\Checkout\Sessions\Post\SubmitTypeEnum $submit_type;
    /**
     * A subset of parameters to be passed to subscription creation for Checkout Sessions in `subscription` mode.
     */
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\SubscriptionDataRequest $subscription_data;
    /**
     * The URL to which Stripe should send customers when payment or setup
     * is complete.
     * This parameter is not allowed if ui_mode is `embedded_page` or `elements`. If you'd like to use
     * information from the successful Checkout Session on your page, read the
     * guide on [customizing your success page](https://docs.stripe.com/payments/checkout/custom-success-page).
     */
    public string $success_url;
    /**
     * Controls tax ID collection during checkout.
     */
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\IdCollectionRequest $tax_id_collection;
    /**
     * The UI mode of the Session. Defaults to `hosted_page`.
     */
    public \StripeSDK\Enums\V1\Checkout\Sessions\Post\UiModeEnum $ui_mode;
    /**
     * Wallet-specific configuration.
     */
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\WalletOptionsRequest $wallet_options;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'allow_promotion_codes' => is_bool($value) ? $this->allow_promotion_codes = $value : parent::assignMember($name, $value),
            'billing_address_collection' => is_string($value) ? $this->billing_address_collection = \StripeSDK\Enums\V1\Checkout\Sessions\Post\AddressCollectionEnum::from($value) : parent::assignMember($name, $value),
            'cancel_url' => is_string($value) ? $this->cancel_url = $value : parent::assignMember($name, $value),
            'client_reference_id' => is_string($value) ? $this->client_reference_id = $value : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'customer' => is_string($value) ? $this->customer = $value : parent::assignMember($name, $value),
            'customer_account' => is_string($value) ? $this->customer_account = $value : parent::assignMember($name, $value),
            'customer_creation' => is_string($value) ? $this->customer_creation = \StripeSDK\Enums\V1\Checkout\Sessions\Post\CustomerCreationEnum::from($value) : parent::assignMember($name, $value),
            'customer_email' => is_string($value) ? $this->customer_email = $value : parent::assignMember($name, $value),
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'expires_at' => is_int($value) ? $this->expires_at = $value : parent::assignMember($name, $value),
            'integration_identifier' => is_string($value) ? $this->integration_identifier = $value : parent::assignMember($name, $value),
            'locale' => is_string($value) ? $this->locale = \StripeSDK\Enums\V1\Checkout\Sessions\Post\SessionsLocaleEnum::from($value) : parent::assignMember($name, $value),
            'mode' => is_string($value) ? $this->mode = \StripeSDK\Enums\V1\Checkout\Sessions\Post\SessionsModeEnum::from($value) : parent::assignMember($name, $value),
            'origin_context' => is_string($value) ? $this->origin_context = \StripeSDK\Enums\V1\Checkout\Sessions\Post\OriginContextEnum::from($value) : parent::assignMember($name, $value),
            'payment_method_collection' => is_string($value) ? $this->payment_method_collection = \StripeSDK\Enums\V1\Checkout\Sessions\Post\MethodCollectionEnum::from($value) : parent::assignMember($name, $value),
            'payment_method_configuration' => is_string($value) ? $this->payment_method_configuration = $value : parent::assignMember($name, $value),
            'redirect_on_completion' => is_string($value) ? $this->redirect_on_completion = \StripeSDK\Enums\V1\Checkout\Sessions\Post\OnCompletionEnum::from($value) : parent::assignMember($name, $value),
            'return_url' => is_string($value) ? $this->return_url = $value : parent::assignMember($name, $value),
            'submit_type' => is_string($value) ? $this->submit_type = \StripeSDK\Enums\V1\Checkout\Sessions\Post\SubmitTypeEnum::from($value) : parent::assignMember($name, $value),
            'success_url' => is_string($value) ? $this->success_url = $value : parent::assignMember($name, $value),
            'ui_mode' => is_string($value) ? $this->ui_mode = \StripeSDK\Enums\V1\Checkout\Sessions\Post\UiModeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
