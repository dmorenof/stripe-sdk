<?php

declare(strict_types=1);

namespace StripeSDK\Requests\CustomFieldsRequest16Variant1Item;

/**
 * custom_field_params
 */
final class Request16Variant1Request extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'name',
        'value',
    ];

    protected const array VALIDATION = [
        'name' => [
            'maxLength' => 40,
        ],
        'value' => [
            'maxLength' => 140,
        ],
    ];

    public string $name {
        set {
            $this->assigning('name', $value);
            $this->name = $value;
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
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'value' => is_string($value) ? $this->value = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
