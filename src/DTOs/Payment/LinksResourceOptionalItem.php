<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * PaymentLinksResourceOptionalItem
 */
final class LinksResourceOptionalItem extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'price',
        'quantity',
    ];

    protected const array VALIDATION = [
        'price' => [
            'maxLength' => 5000,
        ],
    ];

    public ?\StripeSDK\DTOs\Payment\LinksResourceOptionalItemAdjustableQuantity $adjustable_quantity;
    public string $price {
        set {
            $this->assigning('price', $value);
            $this->price = $value;
        }
    }
    public int $quantity;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'adjustable_quantity' => $value === null || $value instanceof \stdClass ? $this->adjustable_quantity = $value === null ? null : new \StripeSDK\DTOs\Payment\LinksResourceOptionalItemAdjustableQuantity($value) : parent::assignMember($name, $value),
            'price' => is_string($value) ? $this->price = $value : parent::assignMember($name, $value),
            'quantity' => is_int($value) ? $this->quantity = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
