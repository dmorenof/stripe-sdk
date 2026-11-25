<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * DiscountSource
 */
final class DiscountSource extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    /**
     * The coupon that was redeemed to create this discount.
     */
    public ?\StripeSDK\DTOs\DiscountSource\CouponDTO $coupon;
    /**
     * The source type of the discount.
     */
    public \StripeSDK\Enums\DiscountSource\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\DiscountSource\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
