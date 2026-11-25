<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\ThreeDSecure;

/**
 * 3DS Authentication
 *
 * The Standalone 3DS API allows you to run EMV 3D Secure (3DS) authentication using Stripe while authorizing the payment with any PSP.
 *
 * Related guide: [Standalone 3DS](/payments/3d-secure/standalone-3d-secure)
 */
final class Authentication extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'channel',
        'created',
        'directory_server',
        'id',
        'livemode',
        'message_category',
        'object_',
        'payment_method',
        'status',
    ];

    protected const array PROPERTY_MAP = [
        'object' => 'object_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'object_' => 'object',
    ];

    protected const array VALIDATION = [
        'challenge_url' => [
            'maxLength' => 5000,
        ],
        'fingerprinting_url' => [
            'maxLength' => 5000,
        ],
        'id' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\DTOs\ThreeDSecureStandaloneResource\AcquirerDetails $acquirer_details;
    /**
     * The amount for this 3DS Authentication.
     */
    public int $amount;
    /**
     * The URL for presenting a challenge to your cardholder, present if status is requires_challenge.
     */
    public string $challenge_url {
        set {
            $this->assigning('challenge_url', $value);
            $this->challenge_url = $value;
        }
    }
    public \StripeSDK\DTOs\ThreeDSecureStandaloneResource\Channel $channel;
    /**
     * Time at which the object was created. Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public int $created;
    /**
     * Three-letter [ISO currency code](https://www.iso.org/iso-4217-currency-codes.html), in lowercase. Must be a [supported currency](https://stripe.com/docs/currencies).
     * Format: currency
     */
    public string $currency;
    /**
     * The 3DS directory server with which this 3DS Authentication was processed.
     */
    public \StripeSDK\Enums\ThreeDSecure\Authentication\DirectoryServerEnum $directory_server;
    /**
     * The URL for performing issuer fingerprinting, present if fingerprinting is supported for the given payment method.
     */
    public string $fingerprinting_url {
        set {
            $this->assigning('fingerprinting_url', $value);
            $this->fingerprinting_url = $value;
        }
    }
    public \StripeSDK\DTOs\ThreeDSecureStandaloneResource\FlowPreference $flow_preference;
    public \StripeSDK\DTOs\ThreeDSecureStandaloneResource\FutureUsage $future_usage;
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
     * Indicates whether this 3DS Authentication is being performed for a payment or non-payment use case.
     */
    public \StripeSDK\Enums\ThreeDSecure\Authentication\MessageCategoryEnum $message_category;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     */
    public ?\StripeSDK\DTOs\ThreeDSecure\Authentication\MetadataMap $metadata;
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\ThreeDSecure\Authentication\ObjectEnum $object_;
    /**
     * The outcome of this 3DS Authentication.
     */
    public \StripeSDK\Enums\ThreeDSecure\Authentication\OutcomeEnum $outcome;
    public \StripeSDK\DTOs\ThreeDSecureStandaloneResource\OutcomeDetails $outcome_details;
    /**
     * ID of the payment method (a PaymentMethod object) to attach to this 3DS Authentication.
     */
    public \StripeSDK\DTOs\ThreeDSecure\Authentication\PaymentMethodDTO $payment_method;
    /**
     * The reason for invoking this 3DS Authentication.
     */
    public \StripeSDK\Enums\ThreeDSecure\Authentication\ReasonEnum $reason;
    public \StripeSDK\DTOs\ThreeDSecureStandaloneResource\ShippingAddress $shipping_address;
    /**
     * Status of this Authentication.
     */
    public \StripeSDK\Enums\ThreeDSecure\Authentication\StatusEnum $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'acquirer_details' => $value instanceof \stdClass ? $this->acquirer_details = new \StripeSDK\DTOs\ThreeDSecureStandaloneResource\AcquirerDetails($value) : parent::assignMember($name, $value),
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'challenge_url' => is_string($value) ? $this->challenge_url = $value : parent::assignMember($name, $value),
            'channel' => $value instanceof \stdClass ? $this->channel = new \StripeSDK\DTOs\ThreeDSecureStandaloneResource\Channel($value) : parent::assignMember($name, $value),
            'created' => is_int($value) ? $this->created = $value : parent::assignMember($name, $value),
            'currency' => is_string($value) ? $this->currency = $value : parent::assignMember($name, $value),
            'directory_server' => is_string($value) ? $this->directory_server = \StripeSDK\Enums\ThreeDSecure\Authentication\DirectoryServerEnum::from($value) : parent::assignMember($name, $value),
            'fingerprinting_url' => is_string($value) ? $this->fingerprinting_url = $value : parent::assignMember($name, $value),
            'flow_preference' => $value instanceof \stdClass ? $this->flow_preference = new \StripeSDK\DTOs\ThreeDSecureStandaloneResource\FlowPreference($value) : parent::assignMember($name, $value),
            'future_usage' => $value instanceof \stdClass ? $this->future_usage = new \StripeSDK\DTOs\ThreeDSecureStandaloneResource\FutureUsage($value) : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'message_category' => is_string($value) ? $this->message_category = \StripeSDK\Enums\ThreeDSecure\Authentication\MessageCategoryEnum::from($value) : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\ThreeDSecure\Authentication\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'outcome' => is_string($value) ? $this->outcome = \StripeSDK\Enums\ThreeDSecure\Authentication\OutcomeEnum::from($value) : parent::assignMember($name, $value),
            'outcome_details' => $value instanceof \stdClass ? $this->outcome_details = new \StripeSDK\DTOs\ThreeDSecureStandaloneResource\OutcomeDetails($value) : parent::assignMember($name, $value),
            'reason' => is_string($value) ? $this->reason = \StripeSDK\Enums\ThreeDSecure\Authentication\ReasonEnum::from($value) : parent::assignMember($name, $value),
            'shipping_address' => $value instanceof \stdClass ? $this->shipping_address = new \StripeSDK\DTOs\ThreeDSecureStandaloneResource\ShippingAddress($value) : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \StripeSDK\Enums\ThreeDSecure\Authentication\StatusEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
