<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Billing;

/**
 * BillingMeterResourceBillingMeterValue
 */
final class MeterResourceBillingMeterValue extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'event_payload_key',
    ];

    protected const array VALIDATION = [
        'event_payload_key' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The key in the meter event payload to use as the value for this meter.
     */
    public string $event_payload_key {
        set {
            $this->assigning('event_payload_key', $value);
            $this->event_payload_key = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'event_payload_key' => is_string($value) ? $this->event_payload_key = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
