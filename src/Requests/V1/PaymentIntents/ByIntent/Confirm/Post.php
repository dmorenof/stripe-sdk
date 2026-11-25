<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentIntents\ByIntent\Confirm;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'client_secret' => [
            'maxLength' => 5000,
        ],
        'confirmation_token' => [
            'maxLength' => 5000,
        ],
        'mandate' => [
            'maxLength' => 5000,
        ],
        'payment_method' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The list of payment method types allowed for use with this payment. Stripe automatically returns compatible payment methods from this list in the `payment_method_types` field of the response, based on the other PaymentIntent parameters, such as `currency`, `amount`, and `customer`.
     */
    public \StripeSDK\Collections\V1\PaymentIntents\ByIntent\Confirm\Post\MethodTypesCollection $allowed_payment_method_types;
    /**
     * Provides industry-specific information about the amount.
     */
    public \StripeSDK\Requests\V1\PaymentIntents\ByIntent\Confirm\Post\AmountDetailsRequest $amount_details;
    /**
     * Amount to confirm on the PaymentIntent. Defaults to `amount` if not provided.
     */
    public int $amount_to_confirm;
    /**
     * Controls when the funds will be captured from the customer's account.
     */
    public \StripeSDK\Enums\V1\PaymentIntents\ByIntent\Confirm\Post\CaptureMethodEnum $capture_method;
    /**
     * The client secret of the PaymentIntent.
     */
    public string $client_secret {
        set {
            $this->assigning('client_secret', $value);
            $this->client_secret = $value;
        }
    }
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
     * Set to `true` to fail the payment attempt if the PaymentIntent transitions into `requires_action`. This parameter is intended for simpler integrations that do not handle customer actions, like [saving cards without authentication](https://docs.stripe.com/payments/save-card-without-authentication).
     */
    public bool $error_on_requires_action;
    /**
     * The list of payment method types to exclude from use with this payment.
     */
    public \StripeSDK\Requests\V1\PaymentIntents\ByIntent\Confirm\Post\MethodTypesRequest $excluded_payment_method_types;
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * Automations to be run during the PaymentIntent lifecycle
     */
    public \StripeSDK\Requests\V1\PaymentIntents\ByIntent\Confirm\Post\ConfirmHooksRequest $hooks;
    /**
     * ID of the mandate that's used for this payment.
     */
    public string $mandate {
        set {
            $this->assigning('mandate', $value);
            $this->mandate = $value;
        }
    }
    public \StripeSDK\Requests\V1\PaymentIntents\ByIntent\Confirm\Post\MandateDataRequest $mandate_data;
    /**
     * Set to `true` to indicate that the customer isn't in your checkout flow during this payment attempt and can't authenticate. Use this parameter in scenarios where you collect payment method details and [charge them later](https://docs.stripe.com/payments/save-during-payment).
     */
    public \StripeSDK\Requests\V1\PaymentIntents\ByIntent\Confirm\Post\OffSessionRequest $off_session;
    /**
     * Provides industry-specific information about the charge.
     */
    public \StripeSDK\Requests\V1\PaymentIntents\ByIntent\Confirm\Post\PaymentDetailsRequest $payment_details;
    /**
     * ID of the payment method (a PaymentMethod, Card, or [compatible Source](https://docs.stripe.com/payments/payment-methods/transitioning#compatibility) object) to attach to this PaymentIntent.
     * If the payment method is attached to a Customer, it must match the [customer](https://docs.stripe.com/api#create_payment_intent-customer) that is set on this PaymentIntent.
     */
    public string $payment_method {
        set {
            $this->assigning('payment_method', $value);
            $this->payment_method = $value;
        }
    }
    /**
     * If provided, this hash will be used to create a PaymentMethod. The new PaymentMethod will appear
     * in the [payment_method](https://docs.stripe.com/api/payment_intents/object#payment_intent_object-payment_method)
     * property on the PaymentIntent.
     */
    public \StripeSDK\Requests\V1\PaymentIntents\ByIntent\Confirm\Post\MethodDataRequest $payment_method_data;
    /**
     * Payment method-specific configuration for this PaymentIntent.
     */
    public \StripeSDK\Requests\V1\PaymentIntents\ByIntent\Confirm\Post\MethodOptionsRequest $payment_method_options;
    /**
     * Options to configure Radar. Learn more about [Radar Sessions](https://docs.stripe.com/radar/radar-session).
     */
    public \StripeSDK\Requests\V1\PaymentIntents\ByIntent\Confirm\Post\RadarOptionsRequest $radar_options;
    /**
     * Email address that the receipt for the resulting payment will be sent to. If `receipt_email` is specified for a payment in live mode, a receipt will be sent regardless of your [email settings](https://dashboard.stripe.com/account/emails).
     */
    public \StripeSDK\Requests\V1\PaymentIntents\ByIntent\Confirm\Post\ReceiptEmailRequest $receipt_email;
    /**
     * The URL to redirect your customer back to after they authenticate or cancel their payment on the payment method's app or site.
     * If you'd prefer to redirect to a mobile application, you can alternatively supply an application URI scheme.
     * This parameter is only used for cards and other redirect-based payment methods.
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
     *
     * If you've already set `setup_future_usage` and you're performing a request using a publishable key, you can only update the value from `on_session` to `off_session`.
     */
    public \StripeSDK\Enums\V1\PaymentIntents\ByIntent\Confirm\Post\FutureUsageEnum $setup_future_usage;
    /**
     * Shipping information for this PaymentIntent.
     */
    public \StripeSDK\Requests\V1\PaymentIntents\ByIntent\Confirm\Post\ConfirmShippingRequest $shipping;
    /**
     * Set to `true` when confirming server-side and using Stripe.js, iOS, or Android client-side SDKs to handle the next actions.
     */
    public bool $use_stripe_sdk;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount_to_confirm' => is_int($value) ? $this->amount_to_confirm = $value : parent::assignMember($name, $value),
            'capture_method' => is_string($value) ? $this->capture_method = \StripeSDK\Enums\V1\PaymentIntents\ByIntent\Confirm\Post\CaptureMethodEnum::from($value) : parent::assignMember($name, $value),
            'client_secret' => is_string($value) ? $this->client_secret = $value : parent::assignMember($name, $value),
            'confirmation_token' => is_string($value) ? $this->confirmation_token = $value : parent::assignMember($name, $value),
            'error_on_requires_action' => is_bool($value) ? $this->error_on_requires_action = $value : parent::assignMember($name, $value),
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'mandate' => is_string($value) ? $this->mandate = $value : parent::assignMember($name, $value),
            'payment_method' => is_string($value) ? $this->payment_method = $value : parent::assignMember($name, $value),
            'return_url' => is_string($value) ? $this->return_url = $value : parent::assignMember($name, $value),
            'setup_future_usage' => is_string($value) ? $this->setup_future_usage = \StripeSDK\Enums\V1\PaymentIntents\ByIntent\Confirm\Post\FutureUsageEnum::from($value) : parent::assignMember($name, $value),
            'use_stripe_sdk' => is_bool($value) ? $this->use_stripe_sdk = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
