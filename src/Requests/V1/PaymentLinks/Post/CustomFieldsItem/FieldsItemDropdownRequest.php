<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentLinks\Post\CustomFieldsItem;

/**
 * custom_field_dropdown_param
 */
final class FieldsItemDropdownRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'options',
    ];

    protected const array VALIDATION = [
        'default_value' => [
            'maxLength' => 100,
        ],
    ];

    public string $default_value {
        set {
            $this->assigning('default_value', $value);
            $this->default_value = $value;
        }
    }
    public \StripeSDK\Collections\V1\PaymentLinks\Post\CustomFieldsItem\Dropdown\DropdownOptionsCollection $options;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'default_value' => is_string($value) ? $this->default_value = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
