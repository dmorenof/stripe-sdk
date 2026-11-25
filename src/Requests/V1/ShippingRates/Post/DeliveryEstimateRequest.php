<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\ShippingRates\Post;

/**
 * delivery_estimate
 *
 * The estimated range for how long shipping will take, meant to be displayable to the customer. This will appear on CheckoutSessions.
 */
final class DeliveryEstimateRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\ShippingRates\Post\DeliveryEstimate\EstimateMaximumRequest $maximum;
    public \StripeSDK\Requests\V1\ShippingRates\Post\DeliveryEstimate\EstimateMinimumRequest $minimum;
}
