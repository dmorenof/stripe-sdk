<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Billing;

/**
 * BillingMeterResourceCustomerMappingSettings
 */
final class MeterResourceCustomerMappingSettings extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'event_payload_key',
        'type',
    ];

    protected const array VALIDATION = [
        'event_payload_key' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The key in the meter event payload to use for mapping the event to a customer.
     */
    public string $event_payload_key {
        set {
            $this->assigning('event_payload_key', $value);
            $this->event_payload_key = $value;
        }
    }
    /**
     * The method for mapping a meter event to a customer.
     */
    public \StripeSDK\Enums\Billing\MeterResourceCustomerMappingSettings\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'event_payload_key' => is_string($value) ? $this->event_payload_key = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\Billing\MeterResourceCustomerMappingSettings\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
