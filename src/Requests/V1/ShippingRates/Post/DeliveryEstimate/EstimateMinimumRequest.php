<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\ShippingRates\Post\DeliveryEstimate;

/**
 * delivery_estimate_bound
 */
final class EstimateMinimumRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'unit',
        'value',
    ];

    public \StripeSDK\Enums\V1\ShippingRates\Post\DeliveryEstimate\Minimum\MinimumUnitEnum $unit;
    public int $value;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'unit' => is_string($value) ? $this->unit = \StripeSDK\Enums\V1\ShippingRates\Post\DeliveryEstimate\Minimum\MinimumUnitEnum::from($value) : parent::assignMember($name, $value),
            'value' => is_int($value) ? $this->value = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
