<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Billing\Meters\Post;

/**
 * meter_value_settings_param
 *
 * Fields that specify how to calculate a meter event's value.
 */
final class ValueSettingsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'event_payload_key',
    ];

    protected const array VALIDATION = [
        'event_payload_key' => [
            'maxLength' => 100,
        ],
    ];

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
