<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\ProductCatalogImplEndpointsTrialOfferResource;

/**
 * ProductCatalogImplEndpointsTrialOfferResourceTrialOfferDuration
 */
final class TrialOfferDuration extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    public \StripeSDK\DTOs\ProductCatalogImplEndpointsTrialOfferResource\RelativeDuration $relative;
    /**
     * The type of trial offer duration.
     */
    public \StripeSDK\Enums\ProductCatalogImplEndpointsTrialOfferResource\TrialOfferDuration\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'relative' => $value instanceof \stdClass ? $this->relative = new \StripeSDK\DTOs\ProductCatalogImplEndpointsTrialOfferResource\RelativeDuration($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\ProductCatalogImplEndpointsTrialOfferResource\TrialOfferDuration\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
