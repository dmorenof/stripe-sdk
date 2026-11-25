<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\SetupIntents;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'confirmation_token' => [
            'maxLength' => 5000,
        ],
        'customer' => [
            'maxLength' => 5000,
        ],
        'customer_account' => [
            'maxLength' => 5000,
        ],
        'description' => [
            'maxLength' => 1000,
        ],
        'payment_method' => [
            'maxLength' => 5000,
        ],
        'payment_method_configuration' => [
            'maxLength' => 100,
        ],
    ];

    /**
     * The list of payment method types to allow for this SetupIntent. Stripe will only use methods in this list when determining the payment methods to offer. A list of valid payment method types can be found [here](https://docs.stripe.com/api/payment_methods/object#payment_method_object-type).
     */
    public \StripeSDK\Collections\V1\SetupIntents\Post\MethodTypesCollection $allowed_payment_method_types;
    /**
     * If present, the SetupIntent's payment method will be attached to the in-context Stripe Account.
     *
     * It can only be used for this Stripe Account’s own money movement flows like InboundTransfer and OutboundTransfers. It cannot be set to true when setting up a PaymentMethod for a Customer, and defaults to false when attaching a PaymentMethod to a Customer.
     */
    public bool $attach_to_self;
    /**
     * When you enable this parameter, this SetupIntent accepts payment methods that you enable in the Dashboard and that are compatible with its other parameters.
     */
    public \StripeSDK\Requests\V1\SetupIntents\Post\PaymentMethodsRequest $automatic_payment_methods;
    /**
     * Set to `true` to attempt to confirm this SetupIntent immediately. This parameter defaults to `false`. If a card is the attached payment method, you can provide a `return_url` in case further authentication is necessary.
     */
    public bool $confirm;
    /**
     * ID of the ConfirmationToken used to confirm this SetupIntent.
     *
     * If the provided ConfirmationToken contains properties that are also being provided in this request, such as `payment_method`, then the values in this request will take precedence.
     */
    public string $confirmation_token {
        set {
            $this->assigning('confirmation_token', $value);
            $this->confirmation_token = $value;
        }
    }
    /**
     * ID of the Customer this SetupIntent belongs to, if one exists.
     *
     * If present, the SetupIntent's payment method will be attached to the Customer on successful setup. Payment methods attached to other Customers cannot be used with this SetupIntent.
     */
    public string $customer {
        set {
            $this->assigning('customer', $value);
            $this->customer = $value;
        }
    }
    /**
     * ID of the Account this SetupIntent belongs to, if one exists.
     *
     * If present, the SetupIntent's payment method will be attached to the Account on successful setup. Payment methods attached to other Accounts cannot be used with this SetupIntent.
     */
    public string $customer_account {
        set {
            $this->assigning('customer_account', $value);
            $this->customer_account = $value;
        }
    }
    /**
     * An arbitrary string attached to the object. Often useful for displaying to users.
     */
    public string $description {
        set {
            $this->assigning('description', $value);
            $this->description = $value;
        }
    }
    /**
     * The list of payment method types to exclude from use with this SetupIntent.
     */
    public \StripeSDK\Collections\V1\SetupIntents\Post\ExcludedPaymentMethodTypesArray\MethodTypesCollection $excluded_payment_method_types;
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * Indicates the directions of money movement for which this payment method is intended to be used.
     *
     * Include `inbound` if you intend to use the payment method as the origin to pull funds from. Include `outbound` if you intend to use the payment method as the destination to send funds to. You can include both if you intend to use the payment method for both purposes.
     */
    public \StripeSDK\Collections\V1\SetupIntents\Post\FlowDirectionsCollection $flow_directions;
    /**
     * This hash contains details about the mandate to create. This parameter can only be used with [`confirm=true`](https://docs.stripe.com/api/setup_intents/create#create_setup_intent-confirm).
     */
    public \StripeSDK\Requests\V1\SetupIntents\Post\MandateDataRequest $mandate_data;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format. Individual keys can be unset by posting an empty value to them. All keys can be unset by posting an empty value to `metadata`.
     */
    public \StripeSDK\Requests\V1\SetupIntents\Post\MetadataMapRequest $metadata;
    /**
     * The Stripe account ID created for this SetupIntent.
     */
    public string $on_behalf_of;
    /**
     * ID of the payment method (a PaymentMethod, Card, or saved Source object) to attach to this SetupIntent.
     */
    public string $payment_method {
        set {
            $this->assigning('payment_method', $value);
            $this->payment_method = $value;
        }
    }
    /**
     * The ID of the [payment method configuration](https://docs.stripe.com/api/payment_method_configurations) to use with this SetupIntent.
     */
    public string $payment_method_configuration {
        set {
            $this->assigning('payment_method_configuration', $value);
            $this->payment_method_configuration = $value;
        }
    }
    /**
     * When included, this hash creates a PaymentMethod that is set as the [`payment_method`](https://docs.stripe.com/api/setup_intents/object#setup_intent_object-payment_method)
     * value in the SetupIntent.
     */
    public \StripeSDK\Requests\V1\SetupIntents\Post\MethodDataRequest $payment_method_data;
    /**
     * Payment method-specific configuration for this SetupIntent.
     */
    public \StripeSDK\Requests\V1\SetupIntents\Post\MethodOptionsRequest $payment_method_options;
    /**
     * The URL to redirect your customer back to after they authenticate or cancel their payment on the payment method's app or site. To redirect to a mobile application, you can alternatively supply an application URI scheme. This parameter can only be used with [`confirm=true`](https://docs.stripe.com/api/setup_intents/create#create_setup_intent-confirm).
     */
    public string $return_url;
    /**
     * If you populate this hash, this SetupIntent generates a `single_use` mandate after successful completion.
     *
     * Single-use mandates are only valid for the following payment methods: `acss_debit`, `alipay`, `au_becs_debit`, `bacs_debit`, `bancontact`, `boleto`, `ideal`, `link`, `sepa_debit`, and `us_bank_account`.
     */
    public \StripeSDK\Requests\V1\SetupIntents\Post\SingleUseRequest $single_use;
    /**
     * Indicates how the payment method is intended to be used in the future. If not provided, this value defaults to `off_session`.
     */
    public \StripeSDK\Enums\V1\SetupIntents\Post\SetupIntentsUsageEnum $usage;
    /**
     * Set to `true` when confirming server-side and using Stripe.js, iOS, or Android client-side SDKs to handle the next actions.
     */
    public bool $use_stripe_sdk;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'attach_to_self' => is_bool($value) ? $this->attach_to_self = $value : parent::assignMember($name, $value),
            'confirm' => is_bool($value) ? $this->confirm = $value : parent::assignMember($name, $value),
            'confirmation_token' => is_string($value) ? $this->confirmation_token = $value : parent::assignMember($name, $value),
            'customer' => is_string($value) ? $this->customer = $value : parent::assignMember($name, $value),
            'customer_account' => is_string($value) ? $this->customer_account = $value : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'on_behalf_of' => is_string($value) ? $this->on_behalf_of = $value : parent::assignMember($name, $value),
            'payment_method' => is_string($value) ? $this->payment_method = $value : parent::assignMember($name, $value),
            'payment_method_configuration' => is_string($value) ? $this->payment_method_configuration = $value : parent::assignMember($name, $value),
            'return_url' => is_string($value) ? $this->return_url = $value : parent::assignMember($name, $value),
            'usage' => is_string($value) ? $this->usage = \StripeSDK\Enums\V1\SetupIntents\Post\SetupIntentsUsageEnum::from($value) : parent::assignMember($name, $value),
            'use_stripe_sdk' => is_bool($value) ? $this->use_stripe_sdk = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
