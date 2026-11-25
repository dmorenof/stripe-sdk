<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentIntents;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount',
        'currency',
    ];

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
        'mandate' => [
            'maxLength' => 5000,
        ],
        'payment_method' => [
            'maxLength' => 5000,
        ],
        'payment_method_configuration' => [
            'maxLength' => 100,
        ],
        'statement_descriptor' => [
            'maxLength' => 22,
        ],
        'statement_descriptor_suffix' => [
            'maxLength' => 22,
        ],
    ];

    /**
     * The list of payment method types allowed for use with this payment. Stripe automatically returns compatible payment methods from this list in the `payment_method_types` field of the response, based on the other PaymentIntent parameters, such as `currency`, `amount`, and `customer`.
     */
    public \StripeSDK\Collections\V1\PaymentIntents\Post\MethodTypesCollection $allowed_payment_method_types;
    /**
     * Amount intended to be collected by this PaymentIntent. A positive integer representing how much to charge in the [smallest currency unit](https://docs.stripe.com/currencies#zero-decimal) (e.g., 100 cents to charge $1.00 or 100 to charge ¥100, a zero-decimal currency). The minimum amount is $0.50 US or [equivalent in charge currency](https://docs.stripe.com/currencies#minimum-and-maximum-charge-amounts). The amount value supports up to eight digits (e.g., a value of 99999999 for a USD charge of $999,999.99).
     */
    public int $amount;
    /**
     * Provides industry-specific information about the amount.
     */
    public \StripeSDK\Requests\V1\PaymentIntents\Post\AmountDetailsRequest $amount_details;
    /**
     * The amount of the application fee (if any) that will be requested to be applied to the payment and transferred to the application owner's Stripe account. The amount of the application fee collected will be capped at the total amount captured. For more information, see the PaymentIntents [use case for connected accounts](https://docs.stripe.com/payments/connected-accounts).
     */
    public int $application_fee_amount;
    /**
     * When you enable this parameter, this PaymentIntent accepts payment methods that you enable in the Dashboard and that are compatible with this PaymentIntent's other parameters.
     */
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentMethodsRequest $automatic_payment_methods;
    /**
     * Controls when the funds will be captured from the customer's account.
     */
    public \StripeSDK\Enums\V1\PaymentIntents\Post\CaptureMethodEnum $capture_method;
    /**
     * Set to `true` to attempt to [confirm this PaymentIntent](https://docs.stripe.com/api/payment_intents/confirm) immediately. This parameter defaults to `false`. When creating and confirming a PaymentIntent at the same time, you can also provide the parameters available in the [Confirm API](https://docs.stripe.com/api/payment_intents/confirm).
     */
    public bool $confirm;
    /**
     * Describes whether we can confirm this PaymentIntent automatically, or if it requires customer action to confirm the payment.
     */
    public \StripeSDK\Enums\V1\PaymentIntents\Post\ConfirmationMethodEnum $confirmation_method;
    /**
     * ID of the ConfirmationToken used to confirm this PaymentIntent.
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
     * Three-letter [ISO currency code](https://www.iso.org/iso-4217-currency-codes.html), in lowercase. Must be a [supported currency](https://stripe.com/docs/currencies).
     * Format: currency
     */
    public string $currency;
    /**
     * ID of the Customer this PaymentIntent belongs to, if one exists.
     *
     * Payment methods attached to other Customers cannot be used with this PaymentIntent.
     *
     * If [setup_future_usage](https://docs.stripe.com/api#payment_intent_object-setup_future_usage) is set and this PaymentIntent's payment method is not `card_present`, then the payment method attaches to the Customer after the PaymentIntent has been confirmed and any required actions from the user are complete. If the payment method is `card_present` and isn't a digital wallet, then a [generated_card](https://docs.stripe.com/api/charges/object#charge_object-payment_method_details-card_present-generated_card) payment method representing the card is created and attached to the Customer instead.
     */
    public string $customer {
        set {
            $this->assigning('customer', $value);
            $this->customer = $value;
        }
    }
    /**
     * ID of the Account representing the customer that this PaymentIntent belongs to, if one exists.
     *
     * Payment methods attached to other Accounts cannot be used with this PaymentIntent.
     *
     * If [setup_future_usage](https://docs.stripe.com/api#payment_intent_object-setup_future_usage) is set and this PaymentIntent's payment method is not `card_present`, then the payment method attaches to the Account after the PaymentIntent has been confirmed and any required actions from the user are complete. If the payment method is `card_present` and isn't a digital wallet, then a [generated_card](https://docs.stripe.com/api/charges/object#charge_object-payment_method_details-card_present-generated_card) payment method representing the card is created and attached to the Account instead.
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
     * Set to `true` to fail the payment attempt if the PaymentIntent transitions into `requires_action`. Use this parameter for simpler integrations that don't handle customer actions, such as [saving cards without authentication](https://docs.stripe.com/payments/save-card-without-authentication). This parameter can only be used with [`confirm=true`](https://docs.stripe.com/api/payment_intents/create#create_payment_intent-confirm).
     */
    public bool $error_on_requires_action;
    /**
     * The list of payment method types to exclude from use with this payment.
     */
    public \StripeSDK\Collections\V1\PaymentIntents\Post\ExcludedPaymentMethodTypesArray\MethodTypesCollection $excluded_payment_method_types;
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * Automations to be run during the PaymentIntent lifecycle
     */
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentIntentsHooksRequest $hooks;
    /**
     * ID of the mandate that's used for this payment. This parameter can only be used with [`confirm=true`](https://docs.stripe.com/api/payment_intents/create#create_payment_intent-confirm).
     */
    public string $mandate {
        set {
            $this->assigning('mandate', $value);
            $this->mandate = $value;
        }
    }
    /**
     * This hash contains details about the Mandate to create. This parameter can only be used with [`confirm=true`](https://docs.stripe.com/api/payment_intents/create#create_payment_intent-confirm).
     */
    public \StripeSDK\Requests\V1\PaymentIntents\Post\MandateDataRequest $mandate_data;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format. Individual keys can be unset by posting an empty value to them. All keys can be unset by posting an empty value to `metadata`.
     */
    public \StripeSDK\Requests\V1\PaymentIntents\Post\MetadataMapRequest $metadata;
    /**
     * Set to `true` to indicate that the customer isn't in your checkout flow during this payment attempt and can't authenticate. Use this parameter in scenarios where you collect payment method details and [charge them later](https://docs.stripe.com/payments/save-during-payment). This parameter can only be used with [`confirm=true`](https://docs.stripe.com/api/payment_intents/create#create_payment_intent-confirm).
     */
    public \StripeSDK\Requests\V1\PaymentIntents\Post\OffSessionRequest $off_session;
    /**
     * The Stripe account ID that these funds are intended for. Learn more about the [use case for connected accounts](https://docs.stripe.com/payments/connected-accounts).
     */
    public string $on_behalf_of;
    /**
     * Provides industry-specific information about the charge.
     */
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentDetailsRequest $payment_details;
    /**
     * ID of the payment method (a PaymentMethod, Card, or [compatible Source](https://docs.stripe.com/payments/payment-methods/transitioning#compatibility) object) to attach to this PaymentIntent.
     *
     * If you omit this parameter with `confirm=true`, `customer.default_source` attaches as this PaymentIntent's payment instrument to improve migration for users of the Charges API. We recommend that you explicitly provide the `payment_method` moving forward.
     * If the payment method is attached to a Customer, you must also provide the ID of that Customer as the [customer](https://docs.stripe.com/api#create_payment_intent-customer) parameter of this PaymentIntent.
     */
    public string $payment_method {
        set {
            $this->assigning('payment_method', $value);
            $this->payment_method = $value;
        }
    }
    /**
     * The ID of the [payment method configuration](https://docs.stripe.com/api/payment_method_configurations) to use with this PaymentIntent.
     */
    public string $payment_method_configuration {
        set {
            $this->assigning('payment_method_configuration', $value);
            $this->payment_method_configuration = $value;
        }
    }
    /**
     * If provided, this hash will be used to create a PaymentMethod. The new PaymentMethod will appear
     * in the [payment_method](https://docs.stripe.com/api/payment_intents/object#payment_intent_object-payment_method)
     * property on the PaymentIntent.
     */
    public \StripeSDK\Requests\V1\PaymentIntents\Post\MethodDataRequest $payment_method_data;
    /**
     * Payment method-specific configuration for this PaymentIntent.
     */
    public \StripeSDK\Requests\V1\PaymentIntents\Post\MethodOptionsRequest $payment_method_options;
    /**
     * Options to configure Radar. Learn more about [Radar Sessions](https://docs.stripe.com/radar/radar-session).
     */
    public \StripeSDK\Requests\V1\PaymentIntents\Post\RadarOptionsRequest $radar_options;
    /**
     * Email address to send the receipt to. If you specify `receipt_email` for a payment in live mode, you send a receipt regardless of your [email settings](https://dashboard.stripe.com/account/emails).
     */
    public string $receipt_email;
    /**
     * The URL to redirect your customer back to after they authenticate or cancel their payment on the payment method's app or site. If you'd prefer to redirect to a mobile application, you can alternatively supply an application URI scheme. This parameter can only be used with [`confirm=true`](https://docs.stripe.com/api/payment_intents/create#create_payment_intent-confirm).
     */
    public string $return_url;
    /**
     * Indicates that you intend to make future payments with this PaymentIntent's payment method.
     *
     * If you provide a Customer with the PaymentIntent, you can use this parameter to [attach the payment method](/payments/save-during-payment) to the Customer after the PaymentIntent is confirmed and the customer completes any required actions. If you don't provide a Customer, you can still [attach](/api/payment_methods/attach) the payment method to a Customer after the transaction completes.
     *
     * If the payment method is `card_present` and isn't a digital wallet, Stripe creates and attaches a [generated_card](/api/charges/object#charge_object-payment_method_details-card_present-generated_card) payment method representing the card to the Customer instead.
     *
     * When processing card payments, Stripe uses `setup_future_usage` to help you comply with regional legislation and network rules, such as [SCA](/strong-customer-authentication).
     */
    public \StripeSDK\Enums\V1\PaymentIntents\Post\FutureUsageEnum $setup_future_usage;
    /**
     * Shipping information for this PaymentIntent.
     */
    public \StripeSDK\Requests\V1\PaymentIntents\Post\PaymentIntentsShippingRequest $shipping;
    /**
     * Text that appears on the customer's statement as the statement descriptor for a non-card charge. This value overrides the account's default statement descriptor. For information about requirements, including the 22-character limit, see [the Statement Descriptor docs](https://docs.stripe.com/get-started/account/statement-descriptors).
     *
     * Setting this value for a card charge returns an error. For card charges, set the [statement_descriptor_suffix](https://docs.stripe.com/get-started/account/statement-descriptors#dynamic) instead.
     */
    public string $statement_descriptor {
        set {
            $this->assigning('statement_descriptor', $value);
            $this->statement_descriptor = $value;
        }
    }
    /**
     * Provides information about a card charge. Concatenated to the account's [statement descriptor prefix](https://docs.stripe.com/get-started/account/statement-descriptors#static) to form the complete statement descriptor that appears on the customer's statement.
     */
    public string $statement_descriptor_suffix {
        set {
            $this->assigning('statement_descriptor_suffix', $value);
            $this->statement_descriptor_suffix = $value;
        }
    }
    /**
     * The parameters that you can use to automatically create a Transfer.
     * Learn more about the [use case for connected accounts](https://docs.stripe.com/payments/connected-accounts).
     */
    public \StripeSDK\Requests\V1\PaymentIntents\Post\TransferDataRequest $transfer_data;
    /**
     * A string that identifies the resulting payment as part of a group. Learn more about the [use case for connected accounts](https://docs.stripe.com/connect/separate-charges-and-transfers).
     */
    public string $transfer_group;
    /**
     * Set to `true` when confirming server-side and using Stripe.js, iOS, or Android client-side SDKs to handle the next actions.
     */
    public bool $use_stripe_sdk;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'application_fee_amount' => is_int($value) ? $this->application_fee_amount = $value : parent::assignMember($name, $value),
            'capture_method' => is_string($value) ? $this->capture_method = \StripeSDK\Enums\V1\PaymentIntents\Post\CaptureMethodEnum::from($value) : parent::assignMember($name, $value),
            'confirm' => is_bool($value) ? $this->confirm = $value : parent::assignMember($name, $value),
            'confirmation_method' => is_string($value) ? $this->confirmation_method = \StripeSDK\Enums\V1\PaymentIntents\Post\ConfirmationMethodEnum::from($value) : parent::assignMember($name, $value),
            'confirmation_token' => is_string($value) ? $this->confirmation_token = $value : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'customer' => is_string($value) ? $this->customer = $value : parent::assignMember($name, $value),
            'customer_account' => is_string($value) ? $this->customer_account = $value : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'error_on_requires_action' => is_bool($value) ? $this->error_on_requires_action = $value : parent::assignMember($name, $value),
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'mandate' => is_string($value) ? $this->mandate = $value : parent::assignMember($name, $value),
            'on_behalf_of' => is_string($value) ? $this->on_behalf_of = $value : parent::assignMember($name, $value),
            'payment_method' => is_string($value) ? $this->payment_method = $value : parent::assignMember($name, $value),
            'payment_method_configuration' => is_string($value) ? $this->payment_method_configuration = $value : parent::assignMember($name, $value),
            'receipt_email' => is_string($value) ? $this->receipt_email = $value : parent::assignMember($name, $value),
            'return_url' => is_string($value) ? $this->return_url = $value : parent::assignMember($name, $value),
            'setup_future_usage' => is_string($value) ? $this->setup_future_usage = \StripeSDK\Enums\V1\PaymentIntents\Post\FutureUsageEnum::from($value) : parent::assignMember($name, $value),
            'statement_descriptor' => is_string($value) ? $this->statement_descriptor = $value : parent::assignMember($name, $value),
            'statement_descriptor_suffix' => is_string($value) ? $this->statement_descriptor_suffix = $value : parent::assignMember($name, $value),
            'transfer_group' => is_string($value) ? $this->transfer_group = $value : parent::assignMember($name, $value),
            'use_stripe_sdk' => is_bool($value) ? $this->use_stripe_sdk = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
