<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Billing;

/**
 * Billing Meter Event
 *
 * Meter events represent actions that customers take in your system. You can use meter events to bill a customer based on their usage. Meter events are associated with billing meters, which define both the contents of the event’s payload and how to aggregate those events.
 */
final class MeterEvent extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'created',
        'event_name',
        'identifier',
        'livemode',
        'object_',
        'payload',
        'timestamp',
    ];

    protected const array PROPERTY_MAP = [
        'object' => 'object_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'object_' => 'object',
    ];

    protected const array VALIDATION = [
        'event_name' => [
            'maxLength' => 100,
        ],
        'identifier' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Time at which the object was created. Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public int $created;
    /**
     * The name of the meter event. Corresponds with the `event_name` field on a meter.
     */
    public string $event_name {
        set {
            $this->assigning('event_name', $value);
            $this->event_name = $value;
        }
    }
    /**
     * A unique identifier for the event.
     */
    public string $identifier {
        set {
            $this->assigning('identifier', $value);
            $this->identifier = $value;
        }
    }
    /**
     * If the object exists in live mode, the value is `true`. If the object exists in test mode, the value is `false`.
     */
    public bool $livemode;
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\Billing\MeterEvent\ObjectEnum $object_;
    /**
     * The payload of the event. This contains the fields corresponding to a meter's `customer_mapping.event_payload_key` (default is `stripe_customer_id`) and `value_settings.event_payload_key` (default is `value`). Read more about the [payload](https://docs.stripe.com/billing/subscriptions/usage-based/meters/configure#meter-configuration-attributes).
     */
    public \StripeSDK\DTOs\Billing\MeterEvent\PayloadMap $payload;
    /**
     * The timestamp passed in when creating the event. Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public int $timestamp;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'created' => is_int($value) ? $this->created = $value : parent::assignMember($name, $value),
            'event_name' => is_string($value) ? $this->event_name = $value : parent::assignMember($name, $value),
            'identifier' => is_string($value) ? $this->identifier = $value : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Billing\MeterEvent\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'timestamp' => is_int($value) ? $this->timestamp = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
