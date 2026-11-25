<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * PaymentLinksResourceCustomFieldsNumeric
 */
final class LinksResourceCustomFieldsNumeric extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'default_value' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The value that pre-fills the field on the payment page.
     */
    public ?string $default_value {
        set {
            $this->assigning('default_value', $value);
            $this->default_value = $value;
        }
    }
    /**
     * The maximum character length constraint for the customer's input.
     */
    public ?int $maximum_length;
    /**
     * The minimum character length requirement for the customer's input.
     */
    public ?int $minimum_length;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'default_value' => $value === null || is_string($value) ? $this->default_value = $value : parent::assignMember($name, $value),
            'maximum_length' => $value === null || is_int($value) ? $this->maximum_length = $value : parent::assignMember($name, $value),
            'minimum_length' => $value === null || is_int($value) ? $this->minimum_length = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
