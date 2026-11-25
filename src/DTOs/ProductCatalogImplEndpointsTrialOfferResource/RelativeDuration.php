<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\ProductCatalogImplEndpointsTrialOfferResource;

/**
 * ProductCatalogImplEndpointsTrialOfferResourceRelativeDuration
 */
final class RelativeDuration extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'iterations',
    ];

    /**
     * The number of iterations of the price's interval for this trial offer.
     */
    public int $iterations;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'iterations' => is_int($value) ? $this->iterations = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
