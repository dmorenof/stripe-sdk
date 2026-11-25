<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * Ephemeral Key
 *
 * Ephemeral keys give the SDKs (like Stripe's mobile SDKs and Issuing Elements) temporary, scoped access to a specific
 * resource, such as a Customer, Issuing Card, or Identity VerificationSession, without exposing your secret API key.
 *
 * Related guides: [Using Issuing Elements](https://docs.stripe.com/issuing/elements).
 */
final class EphemeralKey extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'created',
        'expires',
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
        'id' => [
            'maxLength' => 5000,
        ],
        'secret' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Time at which the object was created. Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public int $created;
    /**
     * Time at which the key will expire. Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public int $expires;
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
    public \StripeSDK\Enums\EphemeralKey\ObjectEnum $object_;
    /**
     * The key's secret. You can use this value to make authorized requests to the Stripe API.
     */
    public string $secret {
        set {
            $this->assigning('secret', $value);
            $this->secret = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'created' => is_int($value) ? $this->created = $value : parent::assignMember($name, $value),
            'expires' => is_int($value) ? $this->expires = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\EphemeralKey\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'secret' => is_string($value) ? $this->secret = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
