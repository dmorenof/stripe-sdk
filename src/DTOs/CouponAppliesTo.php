<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * AppliesTo
 */
final class CouponAppliesTo extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'products',
    ];

    /**
     * A list of product IDs this coupon applies to
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $products;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'products' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->products = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
