<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\LineItems;

/**
 * LineItemsDiscountAmount
 */
final class DiscountAmount extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount',
        'discount',
    ];

    /**
     * The amount discounted.
     */
    public int $amount;
    public \StripeSDK\DTOs\Discount $discount;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            'discount' => $value instanceof \stdClass ? $this->discount = new \StripeSDK\DTOs\Discount($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
