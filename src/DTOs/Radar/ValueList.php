<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Radar;

/**
 * Value List
 *
 * Value lists allow you to group values together which can then be referenced in rules.
 *
 * Related guide: [Default Stripe lists](https://docs.stripe.com/radar/lists#managing-list-items)
 */
final class ValueList extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'alias',
        'created',
        'created_by',
        'id',
        'item_type',
        'list_items',
        'livemode',
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
        'alias' => [
            'maxLength' => 5000,
        ],
        'created_by' => [
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
     * The name of the value list for use in rules.
     */
    public string $alias {
        set {
            $this->assigning('alias', $value);
            $this->alias = $value;
        }
    }
    /**
     * Time at which the object was created. Measured in seconds since the Unix epoch.
     * Format: unix-time
     */
    public int $created;
    /**
     * The name or email address of the user who created this value list.
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
     * The type of items in the value list. One of `card_fingerprint`, `card_bin`, `crypto_fingerprint`, `email`, `ip_address`, `country`, `string`, `case_sensitive_string`, `customer_id`, `account`, `sepa_debit_fingerprint`, or `us_bank_account_fingerprint`.
     */
    public \StripeSDK\Enums\Radar\ValueList\TypeEnum $item_type;
    /**
     * List of items contained within this value list.
     */
    public \StripeSDK\DTOs\Radar\ValueList\ListItemsDTO $list_items;
    /**
     * If the object exists in live mode, the value is `true`. If the object exists in test mode, the value is `false`.
     */
    public bool $livemode;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format.
     */
    public \StripeSDK\DTOs\Radar\ValueList\MetadataMap $metadata;
    /**
     * The name of the value list.
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
    public \StripeSDK\Enums\Radar\ValueList\ObjectEnum $object_;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'alias' => is_string($value) ? $this->alias = $value : parent::assignMember($name, $value),
            'created' => is_int($value) ? $this->created = $value : parent::assignMember($name, $value),
            'created_by' => is_string($value) ? $this->created_by = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'item_type' => is_string($value) ? $this->item_type = \StripeSDK\Enums\Radar\ValueList\TypeEnum::from($value) : parent::assignMember($name, $value),
            'livemode' => is_bool($value) ? $this->livemode = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'object' => is_string($value) ? $this->object_ = \StripeSDK\Enums\Radar\ValueList\ObjectEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
