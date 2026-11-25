<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * Review
 *
 * Reviews can be used to supplement automated fraud detection with human expertise.
 *
 * Learn more about [Radar](/radar) and reviewing payments
 * [here](https://docs.stripe.com/radar/reviews).
 */
final class Review extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'created',
        'id',
        'livemode',
        'object_',
        'open',
        'opened_reason',
        'reason',
    ];

    protected const array PROPERTY_MAP = [
        'object' => 'object_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'object_' => 'object',
    ];

    protected const array VALIDATION = [
        'billing_zip' => [
            'maxLength' => 5000,
        ],
        'id' => [
            'maxLength' => 5000,
        ],
        'ip_address' => [
            'maxLength' => 5000,
        ],
        'reason' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The ZIP or postal code of the card used, if applicable.
     */
    public ?string $billing_zip {
        set {
            $this->assigning('billing_zip', $value);
            $this->billing_zip = $value;
        }
    }
    /**
     * The charge associated with this review.
     */
    public ?\StripeSDK\DTOs\Review\ChargeDTO $charge;
    /**
     * The reason the review was closed, or null if it has not yet been closed. One of `approved`, `refunded`, `refunded_as_fraud`, `disputed`, `redacted`, `canceled`, `payment_never_settled`, or `acknowledged`.
     */
    public ?\StripeSDK\Enums\Review\ClosedReasonEnum $closed_reason;
    /**
     * Time at which the object was created. Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public int $created;
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
     * The IP address where the payment originated.
     */
    public ?string $ip_address {
        set {
            $this->assigning('ip_address', $value);
            $this->ip_address = $value;
        }
    }
    /**
     * Information related to the location of the payment. Note that this information is an approximation and attempts to locate the nearest population center - it should not be used to determine a specific address.
     */
    public ?\StripeSDK\DTOs\Radar\ReviewResourceLocation $ip_address_location;
    /**
     * If the object exists in live mode, the value is `true`. If the object exists in test mode, the value is `false`.
     */
    public bool $livemode;
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\Review\ObjectEnum $object_;
    /**
     * If `true`, the review needs action.
     */
    public bool $open;
    /**
     * The reason the review was opened. One of `rule` or `manual`.
     */
    public \StripeSDK\Enums\Review\OpenedReasonEnum $opened_reason;
    /**
     * The PaymentIntent ID associated with this review, if one exists.
     */
    public \StripeSDK\DTOs\Review\PaymentIntentDTO $payment_intent;
    /**
     * The reason the review is currently open or closed. One of `rule`, `manual`, `approved`, `refunded`, `refunded_as_fraud`, `disputed`, `redacted`, `canceled`, `payment_never_settled`, or `acknowledged`.
     */
    public string $reason {
        set {
            $this->assigning('reason', $value);
            $this->reason = $value;
        }
    }
    /**
     * Information related to the browsing session of the user who initiated the payment.
     */
    public ?\StripeSDK\DTOs\Radar\ReviewResourceSession $session;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'billing_zip' => $value === null || is_string($value) ? $this->billing_zip = $value : parent::assignMember($name, $value),
            'closed_reason' => $value === null || is_string($value) ? $this->closed_reason = $value === null ? null : \StripeSDK\Enums\Review\ClosedReasonEnum::from($value) : parent::assignMember($name, $value),
            'created' => is_int($value) ? $this->created = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'ip_address' => $value === null || is_string($value) ? $this->ip_address = $value : parent::assignMember($name, $value),
            'ip_address_location' => $value === null || $value instanceof \stdClass ? $this->ip_address_location = $value === null ? null : new \StripeSDK\DTOs\Radar\ReviewResourceLocation($value) : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Review\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'open' => is_bool($value) ? $this->open = $value : parent::assignMember($name, $value),
            'opened_reason' => is_string($value) ? $this->opened_reason = \StripeSDK\Enums\Review\OpenedReasonEnum::from($value) : parent::assignMember($name, $value),
            'reason' => is_string($value) ? $this->reason = $value : parent::assignMember($name, $value),
            'session' => $value === null || $value instanceof \stdClass ? $this->session = $value === null ? null : new \StripeSDK\DTOs\Radar\ReviewResourceSession($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
