<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * PaymentLinksResourceCustomFields
 */
final class LinksResourceCustomFields extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'key',
        'label',
        'optional',
        'type',
    ];

    protected const array VALIDATION = [
        'key' => [
            'maxLength' => 5000,
        ],
    ];

    public \StripeSDK\DTOs\Payment\LinksResourceCustomFieldsDropdown $dropdown;
    /**
     * String of your choice that your integration can use to reconcile this field. Must be unique to this field, alphanumeric, and up to 200 characters.
     */
    public string $key {
        set {
            $this->assigning('key', $value);
            $this->key = $value;
        }
    }
    public \StripeSDK\DTOs\Payment\LinksResourceCustomFieldsLabel $label;
    public \StripeSDK\DTOs\Payment\LinksResourceCustomFieldsNumeric $numeric;
    /**
     * Whether the customer is required to complete the field before completing the Checkout Session. Defaults to `false`.
     */
    public bool $optional;
    public \StripeSDK\DTOs\Payment\LinksResourceCustomFieldsText $text;
    /**
     * The type of the field.
     */
    public \StripeSDK\Enums\Payment\LinksResourceCustomFields\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'dropdown' => $value instanceof \stdClass ? $this->dropdown = new \StripeSDK\DTOs\Payment\LinksResourceCustomFieldsDropdown($value) : parent::assignMember($name, $value),
            'key' => is_string($value) ? $this->key = $value : parent::assignMember($name, $value),
            'label' => $value instanceof \stdClass ? $this->label = new \StripeSDK\DTOs\Payment\LinksResourceCustomFieldsLabel($value) : parent::assignMember($name, $value),
            'numeric' => $value instanceof \stdClass ? $this->numeric = new \StripeSDK\DTOs\Payment\LinksResourceCustomFieldsNumeric($value) : parent::assignMember($name, $value),
            'optional' => is_bool($value) ? $this->optional = $value : parent::assignMember($name, $value),
            'text' => $value instanceof \stdClass ? $this->text = new \StripeSDK\DTOs\Payment\LinksResourceCustomFieldsText($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\Payment\LinksResourceCustomFields\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
