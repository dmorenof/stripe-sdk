<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * PaymentLinksResourceCustomFieldsDropdownOption
 */
final class LinksResourceCustomFieldsDropdownOption extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'label',
        'value',
    ];

    protected const array VALIDATION = [
        'label' => [
            'maxLength' => 5000,
        ],
        'value' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The label for the option, displayed to the customer. Up to 100 characters.
     */
    public string $label {
        set {
            $this->assigning('label', $value);
            $this->label = $value;
        }
    }
    /**
     * The value for this option, not displayed to the customer, used by your integration to reconcile the option selected by the customer. Must be unique to this option, alphanumeric, and up to 100 characters.
     */
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
