<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\ShippingRate;

/**
 * ShippingRateDeliveryEstimate
 */
final class DeliveryEstimate extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * The upper bound of the estimated range. If empty, represents no upper bound i.e., infinite.
     */
    public ?\StripeSDK\DTOs\ShippingRate\DeliveryEstimateBound $maximum;
    /**
     * The lower bound of the estimated range. If empty, represents no lower bound.
     */
    public ?\StripeSDK\DTOs\ShippingRate\DeliveryEstimateBound $minimum;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'maximum' => $value === null || $value instanceof \stdClass ? $this->maximum = $value === null ? null : new \StripeSDK\DTOs\ShippingRate\DeliveryEstimateBound($value) : parent::assignMember($name, $value),
            'minimum' => $value === null || $value instanceof \stdClass ? $this->minimum = $value === null ? null : new \StripeSDK\DTOs\ShippingRate\DeliveryEstimateBound($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
