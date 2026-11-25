<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Billing\MeterEvents;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'event_name',
        'payload',
    ];

    protected const array VALIDATION = [
        'event_name' => [
            'maxLength' => 100,
        ],
        'identifier' => [
            'maxLength' => 100,
        ],
    ];

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
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * A unique identifier for the event. If not provided, one is generated. We recommend using UUID-like identifiers. Stripe enforces uniqueness within a rolling period of at least 24 hours. The enforcement of uniqueness primarily addresses issues arising from accidental retries or other problems occurring within extremely brief time intervals. This approach helps prevent duplicate entries and ensures data integrity in high-frequency operations.
     */
    public string $identifier {
        set {
            $this->assigning('identifier', $value);
            $this->identifier = $value;
        }
    }
    /**
     * The payload of the event. This must contain the fields corresponding to a meter's `customer_mapping.event_payload_key` (default is `stripe_customer_id`) and `value_settings.event_payload_key` (default is `value`). Read more about the [payload](https://docs.stripe.com/billing/subscriptions/usage-based/meters/configure#meter-configuration-attributes).
     */
    public \StripeSDK\Requests\V1\Billing\MeterEvents\Post\PayloadMapRequest $payload;
    /**
     * The time of the event. Measured in seconds since the Unix epoch. Must be within the past 35 calendar days or up to 5 minutes in the future. Defaults to current timestamp if not specified.
     * Format: unix-time
     */
    public int $timestamp;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'event_name' => is_string($value) ? $this->event_name = $value : parent::assignMember($name, $value),
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'identifier' => is_string($value) ? $this->identifier = $value : parent::assignMember($name, $value),
            'timestamp' => is_int($value) ? $this->timestamp = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
