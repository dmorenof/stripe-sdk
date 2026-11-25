<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\Checkout\Sessions\Post\ShippingOptionsItem\ShippingRateData;

/**
 * delivery_estimate
 */
final class DeliveryEstimateRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\ShippingOptionsItem\ShippingRateData\DeliveryEstimate\EstimateMaximumRequest $maximum;
    public \StripeSDK\Requests\V1\Checkout\Sessions\Post\ShippingOptionsItem\ShippingRateData\DeliveryEstimate\EstimateMinimumRequest $minimum;
}
