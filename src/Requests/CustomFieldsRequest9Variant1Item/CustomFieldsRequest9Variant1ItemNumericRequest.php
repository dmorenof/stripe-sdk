<?php

declare(strict_types=1);

namespace StripeSDK\Requests\CustomFieldsRequest9Variant1Item;

/**
 * custom_field_numeric_param
 */
final class CustomFieldsRequest9Variant1ItemNumericRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'default_value' => [
            'maxLength' => 255,
        ],
    ];

    public string $default_value {
        set {
            $this->assigning('default_value', $value);
            $this->default_value = $value;
        }
    }
    public int $maximum_length;
    public int $minimum_length;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'default_value' => is_string($value) ? $this->default_value = $value : parent::assignMember($name, $value),
            'maximum_length' => is_int($value) ? $this->maximum_length = $value : parent::assignMember($name, $value),
            'minimum_length' => is_int($value) ? $this->minimum_length = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
