<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Checkout\Sessions\Post;

/**
 * adaptive_pricing_params
 *
 * Settings for price localization with [Adaptive Pricing](https://docs.stripe.com/payments/checkout/adaptive-pricing).
 */
final class AdaptivePricingRequest extends \Dmorenof\SdkRuntime\DTO
{
    public bool $enabled;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'enabled' => is_bool($value) ? $this->enabled = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
