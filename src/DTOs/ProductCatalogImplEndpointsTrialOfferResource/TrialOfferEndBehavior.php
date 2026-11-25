<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\ProductCatalogImplEndpointsTrialOfferResource;

/**
 * ProductCatalogImplEndpointsTrialOfferResourceTrialOfferEndBehavior
 */
final class TrialOfferEndBehavior extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'type',
    ];

    public \StripeSDK\DTOs\ProductCatalogImplEndpointsTrialOfferResource\Transition $transition;
    /**
     * The type of behavior when the trial offer ends.
     */
    public \StripeSDK\Enums\ProductCatalogImplEndpointsTrialOfferResource\TrialOfferEndBehavior\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'transition' => $value instanceof \stdClass ? $this->transition = new \StripeSDK\DTOs\ProductCatalogImplEndpointsTrialOfferResource\Transition($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\ProductCatalogImplEndpointsTrialOfferResource\TrialOfferEndBehavior\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
