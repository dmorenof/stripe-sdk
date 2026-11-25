<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * DiscountsResourceDiscountAmount
 */
final class DiscountsResourceDiscountAmount extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'amount',
        'discount',
    ];

    /**
     * The amount, in cents (or local equivalent), of the discount.
     */
    public int $amount;
    /**
     * The discount that was applied to get this discount amount.
     */
    public \StripeSDK\DTOs\DiscountsResourceDiscountAmount\DiscountDTO $discount;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'amount' => is_int($value) ? $this->amount = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
