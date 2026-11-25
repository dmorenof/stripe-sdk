<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Entitlements;

/**
 * Feature
 *
 * A feature represents a monetizable ability or functionality in your system.
 * Features can be assigned to products, and when those products are purchased, Stripe will create an entitlement to the feature for the purchasing customer.
 */
final class Feature extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'active',
        'id',
        'livemode',
        'lookup_key',
        'metadata',
        'name',
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
        'name' => [
            'maxLength' => 80,
        ],
    ];

    /**
     * Inactive features cannot be attached to new products and will not be returned from the features list endpoint.
     */
    public bool $active;
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
     * Set of key-value pairs that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     */
    public \StripeSDK\DTOs\Entitlements\Feature\MetadataMap $metadata;
    /**
     * The feature's name, for your own purpose, not meant to be displayable to the customer.
     */
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\Entitlements\Feature\ObjectEnum $object_;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'active' => is_bool($value) ? $this->active = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'lookup_key' => is_string($value) ? $this->lookup_key = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Entitlements\Feature\ObjectEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
