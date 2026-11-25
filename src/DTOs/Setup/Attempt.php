<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Setup;

/**
 * SetupAttempt
 *
 * A SetupAttempt describes one attempted confirmation of a SetupIntent,
 * whether that confirmation is successful or unsuccessful. You can use
 * SetupAttempts to inspect details of a specific attempt at setting up a
 * payment method using a SetupIntent.
 */
final class Attempt extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'created',
        'id',
        'livemode',
        'object_',
        'payment_method',
        'payment_method_details',
        'setup_intent',
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
        'customer_account' => [
            'maxLength' => 5000,
        ],
        'id' => [
            'maxLength' => 5000,
        ],
        'status' => [
            'maxLength' => 5000,
        ],
        'usage' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The value of [application](https://docs.stripe.com/api/setup_intents/object#setup_intent_object-application) on the SetupIntent at the time of this confirmation.
     */
    public ?\StripeSDK\DTOs\Setup\Attempt\ApplicationDTO $application;
    /**
     * If present, the SetupIntent's payment method will be attached to the in-context Stripe Account.
     *
     * It can only be used for this Stripe Account’s own money movement flows like InboundTransfer and OutboundTransfers. It cannot be set to true when setting up a PaymentMethod for a Customer, and defaults to false when attaching a PaymentMethod to a Customer.
     */
    public bool $attach_to_self;
    /**
     * Time at which the object was created. Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public int $created;
    /**
     * The value of [customer](https://docs.stripe.com/api/setup_intents/object#setup_intent_object-customer) on the SetupIntent at the time of this confirmation.
     */
    public ?\StripeSDK\DTOs\Setup\Attempt\CustomerDTO $customer;
    /**
     * The value of [customer_account](https://docs.stripe.com/api/setup_intents/object#setup_intent_object-customer_account) on the SetupIntent at the time of this confirmation.
     */
    public ?string $customer_account {
        set {
            $this->assigning('customer_account', $value);
            $this->customer_account = $value;
        }
    }
    /**
     * Indicates the directions of money movement for which this payment method is intended to be used.
     *
     * Include `inbound` if you intend to use the payment method as the origin to pull funds from. Include `outbound` if you intend to use the payment method as the destination to send funds to. You can include both if you intend to use the payment method for both purposes.
     */
    public ?\StripeSDK\Collections\Setup\Attempt\FlowDirectionsCollection $flow_directions;
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
     * If the object exists in live mode, the value is `true`. If the object exists in test mode, the value is `false`.
     */
    public bool $livemode;
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\Setup\Attempt\ObjectEnum $object_;
    /**
     * The value of [on_behalf_of](https://docs.stripe.com/api/setup_intents/object#setup_intent_object-on_behalf_of) on the SetupIntent at the time of this confirmation.
     */
    public ?\StripeSDK\DTOs\Setup\Attempt\OnBehalfDTO $on_behalf_of;
    /**
     * ID of the payment method used with this SetupAttempt.
     */
    public \StripeSDK\DTOs\Setup\Attempt\PaymentMethodDTO $payment_method;
    public \StripeSDK\DTOs\Setup\AttemptPaymentMethodDetails $payment_method_details;
    /**
     * The error encountered during this attempt to confirm the SetupIntent, if any.
     */
    public ?\StripeSDK\DTOs\ApiErrors $setup_error;
    /**
     * ID of the SetupIntent that this attempt belongs to.
     */
    public \StripeSDK\DTOs\Setup\Attempt\SetupIntentDTO $setup_intent;
    /**
     * Status of this SetupAttempt, one of `requires_confirmation`, `requires_action`, `processing`, `succeeded`, `failed`, or `abandoned`.
     */
    public string $status {
        set {
            $this->assigning('status', $value);
            $this->status = $value;
        }
    }
    /**
     * The value of [usage](https://docs.stripe.com/api/setup_intents/object#setup_intent_object-usage) on the SetupIntent at the time of this confirmation, one of `off_session` or `on_session`.
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
            'created' => is_int($value) ? $this->created = $value : parent::assignMember($name, $value),
            'customer_account' => $value === null || is_string($value) ? $this->customer_account = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Setup\Attempt\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'payment_method_details' => $value instanceof \stdClass ? $this->payment_method_details = new \StripeSDK\DTOs\Setup\AttemptPaymentMethodDetails($value) : parent::assignMember($name, $value),
            'setup_error' => $value === null || $value instanceof \stdClass ? $this->setup_error = $value === null ? null : new \StripeSDK\DTOs\ApiErrors($value) : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = $value : parent::assignMember($name, $value),
            'usage' => is_string($value) ? $this->usage = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
