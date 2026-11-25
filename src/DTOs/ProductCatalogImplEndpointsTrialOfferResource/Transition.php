<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\ProductCatalogImplEndpointsTrialOfferResource;

/**
 * ProductCatalogImplEndpointsTrialOfferResourceTransition
 */
final class Transition extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'price',
    ];

    /**
     * The new price to use at the end of the trial offer period.
     */
    public \StripeSDK\DTOs\ProductCatalogImplEndpointsTrialOfferResource\Transition\PriceDTO $price;
}
