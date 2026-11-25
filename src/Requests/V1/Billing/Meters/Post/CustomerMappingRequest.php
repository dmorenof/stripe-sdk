<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Billing\Meters\Post;

/**
 * customer_mapping_param
 *
 * Fields that specify how to map a meter event to a customer.
 */
final class CustomerMappingRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'event_payload_key',
        'type',
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
    public \StripeSDK\Enums\V1\Billing\Meters\Post\CustomerMapping\MappingTypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'event_payload_key' => is_string($value) ? $this->event_payload_key = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\V1\Billing\Meters\Post\CustomerMapping\MappingTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
