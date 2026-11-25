<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * PaymentPagesCheckoutSessionCustomFieldsLabel
 */
final class PagesCheckoutSessionCustomFieldsLabel extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    protected const array VALIDATION = [
        'custom' => [
            'maxLength' => 5000,
        ],
    ];

    /**
     * Custom text for the label, displayed to the customer. Up to 100 characters.
     */
    public ?string $custom {
        set {
            $this->assigning('custom', $value);
            $this->custom = $value;
        }
    }
    /**
     * The type of the label.
     */
    public \StripeSDK\Enums\Payment\PagesCheckoutSessionCustomFieldsLabel\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'custom' => $value === null || is_string($value) ? $this->custom = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\Payment\PagesCheckoutSessionCustomFieldsLabel\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
