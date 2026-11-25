<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Coupons\Post;

/**
 * applies_to_params
 *
 * A hash containing directions for what this Coupon will apply discounts to.
 */
final class AppliesToRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $products;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'products' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->products = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
