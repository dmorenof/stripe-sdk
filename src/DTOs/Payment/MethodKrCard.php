<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * payment_method_kr_card
 */
final class MethodKrCard extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'last4' => [
            'maxLength' => 4,
        ],
    ];

    /**
     * The local credit or debit card brand.
     */
    public ?\StripeSDK\Enums\Payment\MethodKrCard\BrandEnum $brand;
    /**
     * The last four digits of the card. This may not be present for American Express cards.
     */
    public ?string $last4 {
        set {
            $this->assigning('last4', $value);
            $this->last4 = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'brand' => $value === null || is_string($value) ? $this->brand = $value === null ? null : \StripeSDK\Enums\Payment\MethodKrCard\BrandEnum::from($value) : parent::assignMember($name, $value),
            'last4' => $value === null || is_string($value) ? $this->last4 = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
