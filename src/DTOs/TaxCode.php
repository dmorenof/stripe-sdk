<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * Tax Code
 *
 * [Tax codes](https://stripe.com/docs/tax/tax-categories) classify goods and services for tax purposes.
 */
final class TaxCode extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'description',
        'id',
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
        'description' => [
            'maxLength' => 5000,
        ],
        'id' => [
            'maxLength' => 5000,
        ],
        'name' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * A detailed description of which types of products the tax code represents.
     */
    public string $description {
        set {
            $this->assigning('description', $value);
            $this->description = $value;
        }
    }
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
     * A short name for the tax code.
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
    public \StripeSDK\Enums\TaxCode\ObjectEnum $object_;
    /**
     * An object that describes more information about the tax location required for this tax code. Some tax codes require a [performance location](/tax/location-sales#required-versus-optional-performance-locations) to calculate tax correctly.
     */
    public ?\StripeSDK\DTOs\TaxCodeRequirements $requirements;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'description' => is_string($value) ? $this->description = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\TaxCode\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'requirements' => $value === null || $value instanceof \stdClass ? $this->requirements = $value === null ? null : new \StripeSDK\DTOs\TaxCodeRequirements($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
