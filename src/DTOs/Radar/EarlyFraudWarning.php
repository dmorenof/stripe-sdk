<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Radar;

/**
 * Early Fraud Warning
 *
 * An early fraud warning indicates that the card issuer has notified us that a
 * charge may be fraudulent.
 *
 * Related guide: [Early fraud warnings](https://docs.stripe.com/disputes/measuring#early-fraud-warnings)
 */
final class EarlyFraudWarning extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'actionable',
        'charge',
        'created',
        'fraud_type',
        'id',
        'livemode',
        'object_',
    ];

    protected const array PROPERTY_MAP = [
        'object' => 'object_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'object_' => 'object',
    ];

    protected const array VALIDATION = [
        'fraud_type' => [
            'maxLength' => 5000,
        ],
        'id' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * An EFW is actionable if it has not received a dispute and has not been fully refunded. You may wish to proactively refund a charge that receives an EFW, in order to avoid receiving a dispute later.
     */
    public bool $actionable;
    /**
     * ID of the charge this early fraud warning is for, optionally expanded.
     */
    public \StripeSDK\DTOs\Radar\EarlyFraudWarning\ChargeDTO $charge;
    /**
     * Time at which the object was created. Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public int $created;
    /**
     * The type of fraud labelled by the issuer. One of `card_never_received`, `fraudulent_card_application`, `made_with_counterfeit_card`, `made_with_lost_card`, `made_with_stolen_card`, `misc`, `unauthorized_use_of_card`.
     */
    public string $fraud_type {
        set {
            $this->assigning('fraud_type', $value);
            $this->fraud_type = $value;
        }
    }
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
    public \StripeSDK\Enums\Radar\EarlyFraudWarning\ObjectEnum $object_;
    /**
     * ID of the Payment Intent this early fraud warning is for, optionally expanded.
     */
    public \StripeSDK\DTOs\Radar\EarlyFraudWarning\PaymentIntentDTO $payment_intent;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'actionable' => is_bool($value) ? $this->actionable = $value : parent::assignMember($name, $value),
            'created' => is_int($value) ? $this->created = $value : parent::assignMember($name, $value),
            'fraud_type' => is_string($value) ? $this->fraud_type = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Radar\EarlyFraudWarning\ObjectEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
