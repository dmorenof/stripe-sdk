<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * Capability
 *
 * This is an object representing a capability for a Stripe account.
 *
 * Related guide: [Account capabilities](https://docs.stripe.com/connect/account-capabilities)
 */
final class Capability extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'account',
        'id',
        'object_',
        'requested',
        'status',
    ];

    protected const array PROPERTY_MAP = [
        'object' => 'object_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'object_' => 'object',
    ];

    protected const array VALIDATION = [
        'id' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The account for which the capability enables functionality.
     */
    public \StripeSDK\DTOs\Capability\AccountDTO $account;
    public \StripeSDK\DTOs\Account\CapabilityFutureRequirements $future_requirements;
    /**
     * The identifier for the capability.
     */
    public string $id {
        set {
            $this->assigning('id', $value);
            $this->id = $value;
        }
    }
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\Capability\ObjectEnum $object_;
    /**
     * Whether the capability has been requested.
     */
    public bool $requested;
    /**
     * Time at which the capability was requested. Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public ?int $requested_at;
    public \StripeSDK\DTOs\Account\CapabilityRequirements $requirements;
    /**
     * The status of the capability.
     */
    public \StripeSDK\Enums\Capability\StatusEnum $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'future_requirements' => $value instanceof \stdClass ? $this->future_requirements = new \StripeSDK\DTOs\Account\CapabilityFutureRequirements($value) : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Capability\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'requested' => is_bool($value) ? $this->requested = $value : parent::assignMember($name, $value),
            'requested_at' => $value === null || is_int($value) ? $this->requested_at = $value : parent::assignMember($name, $value),
            'requirements' => $value instanceof \stdClass ? $this->requirements = new \StripeSDK\DTOs\Account\CapabilityRequirements($value) : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \StripeSDK\Enums\Capability\StatusEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
