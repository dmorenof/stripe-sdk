<?php

declare(strict_types=1);

namespace StripeSDK\Requests\ShippingOptionsRequestVariant1Item\ShippingRateData;

/**
 * delivery_estimate
 */
final class DeliveryEstimateRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\ShippingOptionsRequestVariant1Item\ShippingRateData\DeliveryEstimate\EstimateMaximumRequest $maximum;
    public \StripeSDK\Requests\ShippingOptionsRequestVariant1Item\ShippingRateData\DeliveryEstimate\EstimateMinimumRequest $minimum;
}
