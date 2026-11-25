<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Setup;

/**
 * SetupIntent
 *
 * A SetupIntent guides you through the process of setting up and saving a customer's payment credentials for future payments.
 * For example, you can use a SetupIntent to set up and save your customer's card without immediately collecting a payment.
 * Later, you can use [PaymentIntents](https://docs.stripe.com/api#payment_intents) to drive the payment flow.
 *
 * Create a SetupIntent when you're ready to collect your customer's payment credentials.
 * Don't maintain long-lived, unconfirmed SetupIntents because they might not be valid.
 * The SetupIntent transitions through multiple [statuses](https://docs.stripe.com/payments/intents#intent-statuses) as it guides
 * you through the setup process.
 *
 * Successful SetupIntents result in payment credentials that are optimized for future payments.
 * For example, cardholders in [certain regions](https://stripe.com/guides/strong-customer-authentication) might need to be run through
 * [Strong Customer Authentication](https://docs.stripe.com/strong-customer-authentication) during payment method collection
 * to streamline later [off-session payments](https://docs.stripe.com/payments/setup-intents).
 * If you use the SetupIntent with a [Customer](https://docs.stripe.com/api#setup_intent_object-customer),
 * it automatically attaches the resulting payment method to that Customer after successful setup.
 * We recommend using SetupIntents or [setup_future_usage](https://docs.stripe.com/api#payment_intent_object-setup_future_usage) on
 * PaymentIntents to save payment methods to prevent saving invalid or unoptimized payment methods.
 *
 * By using SetupIntents, you can reduce friction for your customers, even as regulations change over time.
 *
 * Related guide: [Setup Intents API](https://docs.stripe.com/payments/setup-intents)
 */
final class Intent extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'created',
        'id',
        'livemode',
        'object_',
        'payment_method_types',
        'status',
        'usage',
    ];

    protected const array PROPERTY_MAP = [
        'object' => 'object_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'object_' => 'object',
    ];

    protected const array VALIDATION = [
        'client_secret' => [
            'maxLength' => 5000,
        ],
        'customer_account' => [
            'maxLength' => 5000,
        ],
        'description' => [
            'maxLength' => 5000,
        ],
        'id' => [
            'maxLength' => 5000,
        ],
        'usage' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The list of payment method types to allow for this SetupIntent. Stripe will only use methods in this list when determining the payment methods to offer.
     */
    public ?\StripeSDK\Collections\Setup\Intent\MethodTypesCollection $allowed_payment_method_types;
    /**
     * ID of the Connect application that created the SetupIntent.
     */
    public ?\StripeSDK\DTOs\Setup\Intent\ApplicationDTO $application;
    /**
     * If present, the SetupIntent's payment method will be attached to the in-context Stripe Account.
     *
     * It can only be used for this Stripe Account’s own money movement flows like InboundTransfer and OutboundTransfers. It cannot be set to true when setting up a PaymentMethod for a Customer, and defaults to false when attaching a PaymentMethod to a Customer.
     */
    public bool $attach_to_self;
    /**
     * Settings for dynamic payment methods compatible with this Setup Intent
     */
    public ?\StripeSDK\DTOs\Payment\FlowsAutomaticPaymentMethodsSetupIntent $automatic_payment_methods;
    /**
     * Reason for cancellation of this SetupIntent, one of `abandoned`, `requested_by_customer`, or `duplicate`.
     */
    public ?\StripeSDK\Enums\Setup\Intent\CancellationReasonEnum $cancellation_reason;
    /**
     * The client secret of this SetupIntent. Used for client-side retrieval using a publishable key.
     *
     * The client secret can be used to complete payment setup from your frontend. It should not be stored, logged, or exposed to anyone other than the customer. Make sure that you have TLS enabled on any page that includes the client secret.
     */
    public ?string $client_secret {
        set {
            $this->assigning('client_secret', $value);
            $this->client_secret = $value;
        }
    }
    /**
     * Time at which the object was created. Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public int $created;
    /**
     * ID of the Customer this SetupIntent belongs to, if one exists.
     *
     * If present, the SetupIntent's payment method will be attached to the Customer on successful setup. Payment methods attached to other Customers cannot be used with this SetupIntent.
     */
    public ?\StripeSDK\DTOs\Setup\Intent\CustomerDTO $customer;
    /**
     * ID of the Account this SetupIntent belongs to, if one exists.
     *
     * If present, the SetupIntent's payment method will be attached to the Account on successful setup. Payment methods attached to other Accounts cannot be used with this SetupIntent.
     */
    public ?string $customer_account {
        set {
            $this->assigning('customer_account', $value);
            $this->customer_account = $value;
        }
    }
    /**
     * An arbitrary string attached to the object. Often useful for displaying to users.
     */
    public ?string $description {
        set {
            $this->assigning('description', $value);
            $this->description = $value;
        }
    }
    /**
     * Payment method types that are excluded from this SetupIntent.
     */
    public ?\StripeSDK\Collections\Setup\Intent\ExcludedPaymentMethodTypesArray\MethodTypesCollection $excluded_payment_method_types;
    /**
     * Indicates the directions of money movement for which this payment method is intended to be used.
     *
     * Include `inbound` if you intend to use the payment method as the origin to pull funds from. Include `outbound` if you intend to use the payment method as the destination to send funds to. You can include both if you intend to use the payment method for both purposes.
     */
    public ?\StripeSDK\Collections\Setup\Intent\FlowDirectionsCollection $flow_directions;
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
     * The error encountered in the previous SetupIntent confirmation.
     */
    public ?\StripeSDK\DTOs\ApiErrors $last_setup_error;
    /**
     * The most recent SetupAttempt for this SetupIntent.
     */
    public ?\StripeSDK\DTOs\Setup\Intent\LatestAttemptDTO $latest_attempt;
    /**
     * If the object exists in live mode, the value is `true`. If the object exists in test mode, the value is `false`.
     */
    public bool $livemode;
    public ?\StripeSDK\DTOs\SmorResourceManagedPayments $managed_payments;
    /**
     * ID of the multi use Mandate generated by the SetupIntent.
     */
    public ?\StripeSDK\DTOs\Setup\Intent\MandateDTO $mandate;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     */
    public ?\StripeSDK\DTOs\Setup\Intent\MetadataMap $metadata;
    /**
     * If present, this property tells you what actions you need to take in order for your customer to continue payment setup.
     */
    public ?\StripeSDK\DTOs\Setup\IntentNextAction $next_action;
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\Setup\Intent\ObjectEnum $object_;
    /**
     * The account (if any) for which the setup is intended.
     */
    public ?\StripeSDK\DTOs\Setup\Intent\OnBehalfDTO $on_behalf_of;
    /**
     * ID of the payment method used with this SetupIntent. If the payment method is `card_present` and isn't a digital wallet, then the [generated_card](https://docs.stripe.com/api/setup_attempts/object#setup_attempt_object-payment_method_details-card_present-generated_card) associated with the `latest_attempt` is attached to the Customer instead.
     */
    public ?\StripeSDK\DTOs\Setup\Intent\PaymentMethodDTO $payment_method;
    /**
     * Information about the [payment method configuration](https://docs.stripe.com/api/payment_method_configurations) used for this Setup Intent.
     */
    public ?\StripeSDK\DTOs\Payment\MethodConfigBizPaymentMethodConfigurationDetails $payment_method_configuration_details;
    /**
     * Payment method-specific configuration for this SetupIntent.
     */
    public ?\StripeSDK\DTOs\Setup\IntentPaymentMethodOptions $payment_method_options;
    /**
     * The list of payment method types (e.g. card) that this SetupIntent is allowed to set up. A list of valid payment method types can be found [here](https://docs.stripe.com/api/payment_methods/object#payment_method_object-type).
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $payment_method_types;
    /**
     * ID of the single_use Mandate generated by the SetupIntent.
     */
    public ?\StripeSDK\DTOs\Setup\Intent\UseMandateDTO $single_use_mandate;
    /**
     * [Status](https://docs.stripe.com/payments/intents#intent-statuses) of this SetupIntent, one of `requires_payment_method`, `requires_confirmation`, `requires_action`, `processing`, `canceled`, or `succeeded`.
     */
    public \StripeSDK\Enums\Setup\Intent\StatusEnum $status;
    /**
     * Indicates how the payment method is intended to be used in the future.
     *
     * Use `on_session` if you intend to only reuse the payment method when the customer is in your checkout flow. Use `off_session` if your customer may or may not be in your checkout flow. If not provided, this value defaults to `off_session`.
     */
    public string $usage {
        set {
            $this->assigning('usage', $value);
            $this->usage = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'attach_to_self' => is_bool($value) ? $this->attach_to_self = $value : parent::assignMember($name, $value),
            'automatic_payment_methods' => $value === null || $value instanceof \stdClass ? $this->automatic_payment_methods = $value === null ? null : new \StripeSDK\DTOs\Payment\FlowsAutomaticPaymentMethodsSetupIntent($value) : parent::assignMember($name, $value),
            'cancellation_reason' => $value === null || is_string($value) ? $this->cancellation_reason = $value === null ? null : \StripeSDK\Enums\Setup\Intent\CancellationReasonEnum::from($value) : parent::assignMember($name, $value),
            'client_secret' => $value === null || is_string($value) ? $this->client_secret = $value : parent::assignMember($name, $value),
            'created' => is_int($value) ? $this->created = $value : parent::assignMember($name, $value),
            'customer_account' => $value === null || is_string($value) ? $this->customer_account = $value : parent::assignMember($name, $value),
            'description' => $value === null || is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'last_setup_error' => $value === null || $value instanceof \stdClass ? $this->last_setup_error = $value === null ? null : new \StripeSDK\DTOs\ApiErrors($value) : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'managed_payments' => $value === null || $value instanceof \stdClass ? $this->managed_payments = $value === null ? null : new \StripeSDK\DTOs\SmorResourceManagedPayments($value) : parent::assignMember($name, $value),
            'next_action' => $value === null || $value instanceof \stdClass ? $this->next_action = $value === null ? null : new \StripeSDK\DTOs\Setup\IntentNextAction($value) : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Setup\Intent\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'payment_method_configuration_details' => $value === null || $value instanceof \stdClass ? $this->payment_method_configuration_details = $value === null ? null : new \StripeSDK\DTOs\Payment\MethodConfigBizPaymentMethodConfigurationDetails($value) : parent::assignMember($name, $value),
            'payment_method_options' => $value === null || $value instanceof \stdClass ? $this->payment_method_options = $value === null ? null : new \StripeSDK\DTOs\Setup\IntentPaymentMethodOptions($value) : parent::assignMember($name, $value),
            'payment_method_types' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->payment_method_types = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \StripeSDK\Enums\Setup\Intent\StatusEnum::from($value) : parent::assignMember($name, $value),
            'usage' => is_string($value) ? $this->usage = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
