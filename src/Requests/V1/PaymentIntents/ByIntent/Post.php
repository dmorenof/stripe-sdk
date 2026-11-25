<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentIntents\ByIntent;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
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
    public \StripeSDK\Collections\V1\PaymentIntents\ByIntent\Post\MethodTypesCollection $allowed_payment_method_types;
    /**
     * Amount intended to be collected by this PaymentIntent. A positive integer representing how much to charge in the [smallest currency unit](https://docs.stripe.com/currencies#zero-decimal) (e.g., 100 cents to charge $1.00 or 100 to charge ¥100, a zero-decimal currency). The minimum amount is $0.50 US or [equivalent in charge currency](https://docs.stripe.com/currencies#minimum-and-maximum-charge-amounts). The amount value supports up to eight digits (e.g., a value of 99999999 for a USD charge of $999,999.99).
     */
    public int $amount;
    /**
     * Provides industry-specific information about the amount.
     */
    public \StripeSDK\Requests\V1\PaymentIntents\ByIntent\Post\AmountDetailsRequest $amount_details;
    /**
     * The amount of the application fee (if any) that will be requested to be applied to the payment and transferred to the application owner's Stripe account. The amount of the application fee collected will be capped at the total amount captured. For more information, see the PaymentIntents [use case for connected accounts](https://docs.stripe.com/payments/connected-accounts).
     */
    public \StripeSDK\Requests\V1\PaymentIntents\ByIntent\Post\FeeAmountRequest $application_fee_amount;
    /**
     * Controls when the funds will be captured from the customer's account.
     */
    public \StripeSDK\Enums\V1\PaymentIntents\ByIntent\Post\CaptureMethodEnum $capture_method;
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
     * The list of payment method types to exclude from use with this payment.
     */
    public \StripeSDK\Requests\V1\PaymentIntents\ByIntent\Post\MethodTypesRequest $excluded_payment_method_types;
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * Automations to be run during the PaymentIntent lifecycle
     */
    public \StripeSDK\Requests\V1\PaymentIntents\ByIntent\Post\ByIntentHooksRequest $hooks;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format. Individual keys can be unset by posting an empty value to them. All keys can be unset by posting an empty value to `metadata`.
     */
    public \StripeSDK\Requests\V1\PaymentIntents\ByIntent\Post\ByIntentMetadataRequest $metadata;
    /**
     * Provides industry-specific information about the charge.
     */
    public \StripeSDK\Requests\V1\PaymentIntents\ByIntent\Post\PaymentDetailsRequest $payment_details;
    /**
     * ID of the payment method (a PaymentMethod, Card, or [compatible Source](https://docs.stripe.com/payments/payment-methods/transitioning#compatibility) object) to attach to this PaymentIntent. To unset this field to null, pass in an empty string.
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
    public \StripeSDK\Requests\V1\PaymentIntents\ByIntent\Post\MethodDataRequest $payment_method_data;
    /**
     * Payment-method-specific configuration for this PaymentIntent.
     */
    public \StripeSDK\Requests\V1\PaymentIntents\ByIntent\Post\MethodOptionsRequest $payment_method_options;
    /**
     * Email address that the receipt for the resulting payment will be sent to. If `receipt_email` is specified for a payment in live mode, a receipt will be sent regardless of your [email settings](https://dashboard.stripe.com/account/emails).
     */
    public \StripeSDK\Requests\V1\PaymentIntents\ByIntent\Post\ReceiptEmailRequest $receipt_email;
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
    public \StripeSDK\Enums\V1\PaymentIntents\ByIntent\Post\FutureUsageEnum $setup_future_usage;
    /**
     * Shipping information for this PaymentIntent.
     */
    public \StripeSDK\Requests\V1\PaymentIntents\ByIntent\Post\ByIntentShippingRequest $shipping;
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
     * Use this parameter to automatically create a Transfer when the payment succeeds. Learn more about the [use case for connected accounts](https://docs.stripe.com/payments/connected-accounts).
     */
    public \StripeSDK\Requests\V1\PaymentIntents\ByIntent\Post\TransferDataRequest $transfer_data;
    /**
     * A string that identifies the resulting payment as part of a group. You can only provide `transfer_group` if it hasn't been set. Learn more about the [use case for connected accounts](https://docs.stripe.com/payments/connected-accounts).
     */
    public string $transfer_group;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'capture_method' => is_string($value) ? $this->capture_method = \StripeSDK\Enums\V1\PaymentIntents\ByIntent\Post\CaptureMethodEnum::from($value) : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'customer' => is_string($value) ? $this->customer = $value : parent::assignMember($name, $value),
            'customer_account' => is_string($value) ? $this->customer_account = $value : parent::assignMember($name, $value),
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'payment_method' => is_string($value) ? $this->payment_method = $value : parent::assignMember($name, $value),
            'payment_method_configuration' => is_string($value) ? $this->payment_method_configuration = $value : parent::assignMember($name, $value),
            'setup_future_usage' => is_string($value) ? $this->setup_future_usage = \StripeSDK\Enums\V1\PaymentIntents\ByIntent\Post\FutureUsageEnum::from($value) : parent::assignMember($name, $value),
            'statement_descriptor' => is_string($value) ? $this->statement_descriptor = $value : parent::assignMember($name, $value),
            'statement_descriptor_suffix' => is_string($value) ? $this->statement_descriptor_suffix = $value : parent::assignMember($name, $value),
            'transfer_group' => is_string($value) ? $this->transfer_group = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
