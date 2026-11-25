<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Entitlements;

/**
 * Active Entitlement
 *
 * An active entitlement describes access to a feature for a customer.
 */
final class ActiveEntitlement extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'feature',
        'id',
        'livemode',
        'lookup_key',
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
        'lookup_key' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The [Feature](https://docs.stripe.com/api/entitlements/feature) that the customer is entitled to.
     */
    public \StripeSDK\DTOs\Entitlements\ActiveEntitlement\FeatureDTO $feature;
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
     * A unique key you provide as your own system identifier. This may be up to 80 characters.
     */
    public string $lookup_key {
        set {
            $this->assigning('lookup_key', $value);
            $this->lookup_key = $value;
        }
    }
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\Entitlements\ActiveEntitlement\ObjectEnum $object_;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'lookup_key' => is_string($value) ? $this->lookup_key = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Entitlements\ActiveEntitlement\ObjectEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
