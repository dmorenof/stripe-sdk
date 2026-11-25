<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\DeletedRadar;

/**
 * RadarListDeletedList
 */
final class ValueList extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'deleted',
        'id',
        'object_',
    ];

    protected const array PROPERTY_MAP = [
        'object' => 'object_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'object_' => 'object',
    ];

    protected const array VALIDATION = [
        'deleted' => [
            'jsonSchema' => '{"enum":[true]}',
        ],
        'id' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Always true for a deleted object
     */
    public bool $deleted {
        set {
            $this->assigning('deleted', $value);
            $this->deleted = $value;
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
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\DeletedRadar\ValueList\ObjectEnum $object_;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'deleted' => is_bool($value) ? $this->deleted = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\DeletedRadar\ValueList\ObjectEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
