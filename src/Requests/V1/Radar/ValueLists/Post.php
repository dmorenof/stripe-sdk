<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Radar\ValueLists;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'alias',
        'name',
    ];

    protected const array VALIDATION = [
        'alias' => [
            'maxLength' => 100,
        ],
        'item_type' => [
            'maxLength' => 5000,
        ],
        'name' => [
            'maxLength' => 100,
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
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * Type of the items in the value list. One of `card_fingerprint`, `card_bin`, `crypto_fingerprint`, `email`, `ip_address`, `country`, `string`, `case_sensitive_string`, `customer_id`, `account`, `sepa_debit_fingerprint`, or `us_bank_account_fingerprint`. Use `string` if the item type is unknown or mixed.
     */
    public \StripeSDK\Enums\V1\Radar\ValueLists\Post\ValueListsTypeEnum $item_type {
        set {
            $this->assigning('item_type', $value);
            $this->item_type = $value;
        }
    }
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format. Individual keys can be unset by posting an empty value to them. All keys can be unset by posting an empty value to `metadata`.
     */
    public \StripeSDK\Requests\V1\Radar\ValueLists\Post\MetadataMapRequest $metadata;
    /**
     * The human-readable name of the value list.
     */
    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'alias' => is_string($value) ? $this->alias = $value : parent::assignMember($name, $value),
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'item_type' => is_string($value) ? $this->item_type = \StripeSDK\Enums\V1\Radar\ValueLists\Post\ValueListsTypeEnum::from($value) : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
