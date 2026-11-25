<?php

declare(strict_types=1);

namespace StripeSDK\Requests\ShippingCostRequestVariant1\ShippingRateData;

/**
 * delivery_estimate
 */
final class DeliveryEstimateRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\ShippingCostRequestVariant1\ShippingRateData\DeliveryEstimate\EstimateMaximumRequest $maximum;
    public \StripeSDK\Requests\ShippingCostRequestVariant1\ShippingRateData\DeliveryEstimate\EstimateMinimumRequest $minimum;
}
