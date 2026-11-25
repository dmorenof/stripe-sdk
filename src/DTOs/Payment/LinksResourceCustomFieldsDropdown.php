<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * PaymentLinksResourceCustomFieldsDropdown
 */
final class LinksResourceCustomFieldsDropdown extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'options',
    ];

    protected const array VALIDATION = [
        'default_value' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * The value that pre-fills on the payment page.
     */
    public ?string $default_value {
        set {
            $this->assigning('default_value', $value);
            $this->default_value = $value;
        }
    }
    /**
     * The options available for the customer to select. Up to 200 options allowed.
     */
    public \StripeSDK\Collections\Payment\LinksResourceCustomFieldsDropdown\OptionsCollection $options;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'default_value' => $value === null || is_string($value) ? $this->default_value = $value : parent::assignMember($name, $value),
            'options' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->options = new \StripeSDK\Collections\Payment\LinksResourceCustomFieldsDropdown\OptionsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\Payment\LinksResourceCustomFieldsDropdownOption::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
