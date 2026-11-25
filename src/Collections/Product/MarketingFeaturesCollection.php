<?php

declare(strict_types=1);

namespace StripeSDK\Collections\Product;

/** @extends \Dmorenof\SdkRuntime\TypedArray<\StripeSDK\DTOs\ProductMarketingFeature> */
final class MarketingFeaturesCollection extends \Dmorenof\SdkRuntime\TypedArray
{
    protected string $expected_type = \StripeSDK\DTOs\ProductMarketingFeature::class;
}
