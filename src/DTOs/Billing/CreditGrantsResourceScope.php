<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Billing;

/**
 * BillingCreditGrantsResourceScope
 */
final class CreditGrantsResourceScope extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The price type that credit grants can apply to. We currently only support the `metered` price type. This refers to prices that have a [Billing Meter](https://docs.stripe.com/api/billing/meter) attached to them. Cannot be used in combination with `prices`.
     */
    public \StripeSDK\Enums\Billing\CreditGrantsResourceScope\PriceTypeEnum $price_type;
    /**
     * The prices that credit grants can apply to. We currently only support `metered` prices. This refers to prices that have a [Billing Meter](https://docs.stripe.com/api/billing/meter) attached to them. Cannot be used in combination with `price_type`.
     */
    public \StripeSDK\Collections\Billing\CreditGrantsResourceScope\PricesCollection $prices;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'price_type' => is_string($value) ? $this->price_type = \StripeSDK\Enums\Billing\CreditGrantsResourceScope\PriceTypeEnum::from($value) : parent::assignMember($name, $value),
            'prices' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->prices = new \StripeSDK\Collections\Billing\CreditGrantsResourceScope\PricesCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\Billing\CreditGrantsResourceApplicablePrice::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
