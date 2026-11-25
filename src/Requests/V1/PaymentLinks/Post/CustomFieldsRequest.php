<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentLinks\Post;

/**
 * custom_field_param
 */
final class CustomFieldsRequest extends \Dmorenof\SdkRuntime\DTO
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

    public \StripeSDK\Requests\V1\PaymentLinks\Post\CustomFieldsItem\FieldsItemDropdownRequest $dropdown;
    public string $key {
        set {
            $this->assigning('key', $value);
            $this->key = $value;
        }
    }
    public \StripeSDK\Requests\V1\PaymentLinks\Post\CustomFieldsItem\FieldsItemLabelRequest $label;
    public \StripeSDK\Requests\V1\PaymentLinks\Post\CustomFieldsItem\FieldsItemNumericRequest $numeric;
    public bool $optional;
    public \StripeSDK\Requests\V1\PaymentLinks\Post\CustomFieldsItem\FieldsItemTextRequest $text;
    public \StripeSDK\Enums\V1\PaymentLinks\Post\CustomFieldsItem\FieldsItemTypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'key' => is_string($value) ? $this->key = $value : parent::assignMember($name, $value),
            'optional' => is_bool($value) ? $this->optional = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\V1\PaymentLinks\Post\CustomFieldsItem\FieldsItemTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
