<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Issuing;

/**
 * Physical Bundle
 *
 * A Physical Bundle represents the bundle of physical items - card stock, carrier letter, and envelope - that is shipped to a cardholder when you create a physical card.
 */
final class PhysicalBundle extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'features',
        'id',
        'livemode',
        'name',
        'object_',
        'status',
        'type',
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
        'name' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\DTOs\Issuing\PhysicalBundleFeatures $features;
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
     * Friendly display name.
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
    public \StripeSDK\Enums\Issuing\PhysicalBundle\ObjectEnum $object_;
    /**
     * Whether this physical bundle can be used to create cards.
     */
    public \StripeSDK\Enums\Issuing\PhysicalBundle\StatusEnum $status;
    /**
     * Whether this physical bundle is a standard Stripe offering or custom-made for you.
     */
    public \StripeSDK\Enums\Issuing\PhysicalBundle\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'features' => $value instanceof \stdClass ? $this->features = new \StripeSDK\DTOs\Issuing\PhysicalBundleFeatures($value) : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Issuing\PhysicalBundle\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \StripeSDK\Enums\Issuing\PhysicalBundle\StatusEnum::from($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\Issuing\PhysicalBundle\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
