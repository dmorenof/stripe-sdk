<?php

declare(strict_types=1);

namespace StripeSDK\Requests\CustomFieldsRequest9Variant1Item;

/**
 * custom_field_param
 */
final class Request9Variant1Request extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'key',
        'label',
        'type',
    ];

    protected const array VALIDATION = [
        'key' => [
            'maxLength' => 200,
        ],
    ];

    public \StripeSDK\Requests\CustomFieldsRequest9Variant1Item\CustomFieldsRequest9Variant1ItemDropdownRequest $dropdown;
    public string $key {
        set {
            $this->assigning('key', $value);
            $this->key = $value;
        }
    }
    public \StripeSDK\Requests\CustomFieldsRequest9Variant1Item\CustomFieldsRequest9Variant1ItemLabelRequest $label;
    public \StripeSDK\Requests\CustomFieldsRequest9Variant1Item\CustomFieldsRequest9Variant1ItemNumericRequest $numeric;
    public bool $optional;
    public \StripeSDK\Requests\CustomFieldsRequest9Variant1Item\CustomFieldsRequest9Variant1ItemTextRequest $text;
    public \StripeSDK\Enums\CustomFieldsRequest9Variant1Item\CustomFieldsRequest9Variant1ItemTypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'key' => is_string($value) ? $this->key = $value : parent::assignMember($name, $value),
            'optional' => is_bool($value) ? $this->optional = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\CustomFieldsRequest9Variant1Item\CustomFieldsRequest9Variant1ItemTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
