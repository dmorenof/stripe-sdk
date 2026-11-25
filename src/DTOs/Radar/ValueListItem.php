<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Radar;

/**
 * Value List Item
 *
 * Value list items allow you to add specific values to a given Radar value list, which can then be used in rules.
 *
 * Related guide: [Managing list items](https://docs.stripe.com/radar/lists#managing-list-items)
 */
final class ValueListItem extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'created',
        'created_by',
        'id',
        'livemode',
        'object_',
        'value',
        'value_list',
    ];

    protected const array PROPERTY_MAP = [
        'object' => 'object_',
    ];
    protected const array WIRE_PROPERTY_MAP = [
        'object_' => 'object',
    ];

    protected const array VALIDATION = [
        'created_by' => [
            'maxLength' => 5000,
        ],
        'id' => [
            'maxLength' => 5000,
        ],
        'value' => [
            'maxLength' => 5000,
        ],
        'value_list' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Time at which the object was created. Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public int $created;
    /**
     * The name or email address of the user who added this item to the value list.
     */
    public string $created_by {
        set {
            $this->assigning('created_by', $value);
            $this->created_by = $value;
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
     * If the object exists in live mode, the value is `true`. If the object exists in test mode, the value is `false`.
     */
    public bool $livemode;
    /**
     * String representing the object's type. Objects of the same type share the same value.
     */
    public \StripeSDK\Enums\Radar\ValueListItem\ObjectEnum $object_;
    /**
     * The value of the item.
     */
    public string $value {
        set {
            $this->assigning('value', $value);
            $this->value = $value;
        }
    }
    /**
     * The identifier of the value list this item belongs to.
     */
    public string $value_list {
        set {
            $this->assigning('value_list', $value);
            $this->value_list = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'created' => is_int($value) ? $this->created = $value : parent::assignMember($name, $value),
            'created_by' => is_string($value) ? $this->created_by = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Radar\ValueListItem\ObjectEnum::from($value) : parent::assignMember($name, $value),
            'value' => is_string($value) ? $this->value = $value : parent::assignMember($name, $value),
            'value_list' => is_string($value) ? $this->value_list = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
