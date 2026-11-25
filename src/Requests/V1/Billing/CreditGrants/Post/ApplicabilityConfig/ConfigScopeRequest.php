<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Billing\CreditGrants\Post\ApplicabilityConfig;

/**
 * scope_param
 */
final class ConfigScopeRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Enums\V1\Billing\CreditGrants\Post\ApplicabilityConfig\Scope\PriceTypeEnum $price_type;
    public \StripeSDK\Collections\V1\Billing\CreditGrants\Post\ApplicabilityConfig\Scope\ScopePricesCollection $prices;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'price_type' => is_string($value) ? $this->price_type = \StripeSDK\Enums\V1\Billing\CreditGrants\Post\ApplicabilityConfig\Scope\PriceTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
