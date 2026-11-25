<?php

declare(strict_types=1);

namespace StripeSDK\Requests\CustomFieldsRequest9Variant1Item;

/**
 * custom_field_label_param
 */
final class CustomFieldsRequest9Variant1ItemLabelRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'custom',
        'type',
    ];

    protected const array VALIDATION = [
        'custom' => [
            'maxLength' => 100,
        ],
    ];

    public string $custom {
        set {
            $this->assigning('custom', $value);
            $this->custom = $value;
        }
    }
    public \StripeSDK\Enums\CustomFieldsRequest9Variant1Item\Label\LabelTypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'custom' => is_string($value) ? $this->custom = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\CustomFieldsRequest9Variant1Item\Label\LabelTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
