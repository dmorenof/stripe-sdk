<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentLinks\Post\CustomFieldsItem\Dropdown;

/**
 * custom_field_option_param
 */
final class DropdownOptionsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'label',
        'value',
    ];

    protected const array VALIDATION = [
        'label' => [
            'maxLength' => 100,
        ],
        'value' => [
            'maxLength' => 100,
        ],
    ];

    public string $label {
        set {
            $this->assigning('label', $value);
            $this->label = $value;
        }
    }
    public string $value {
        set {
            $this->assigning('value', $value);
            $this->value = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'label' => is_string($value) ? $this->label = $value : parent::assignMember($name, $value),
            'value' => is_string($value) ? $this->value = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
