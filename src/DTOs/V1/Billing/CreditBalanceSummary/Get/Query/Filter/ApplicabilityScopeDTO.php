<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\V1\Billing\CreditBalanceSummary\Get\Query\Filter;

/**
 * scope_param
 */
final class ApplicabilityScopeDTO extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Enums\V1\Billing\CreditBalanceSummary\Get\Query\Filter\ApplicabilityScope\PriceTypeEnum $price_type;
    public \StripeSDK\Collections\V1\Billing\CreditBalanceSummary\Get\Query\Filter\ApplicabilityScope\ScopePricesCollection $prices;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'price_type' => is_string($value) ? $this->price_type = \StripeSDK\Enums\V1\Billing\CreditBalanceSummary\Get\Query\Filter\ApplicabilityScope\PriceTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
