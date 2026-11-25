<?php

declare(strict_types=1);

namespace StripeSDK\Requests\ShippingOptionsRequestVariant1Item;

/**
 * create_params
 */
final class RateDataRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'display_name',
    ];

    protected const array VALIDATION = [
        'display_name' => [
            'maxLength' => 100,
        ],
    ];

    public \StripeSDK\Requests\ShippingOptionsRequestVariant1Item\ShippingRateData\DeliveryEstimateRequest $delivery_estimate;
    public string $display_name {
        set {
            $this->assigning('display_name', $value);
            $this->display_name = $value;
        }
    }
    public \StripeSDK\Requests\ShippingOptionsRequestVariant1Item\ShippingRateData\FixedAmountRequest $fixed_amount;
    public \StripeSDK\Requests\ShippingOptionsRequestVariant1Item\ShippingRateData\MetadataMapRequest $metadata;
    public \StripeSDK\Enums\ShippingOptionsRequestVariant1Item\ShippingRateData\TaxBehaviorEnum $tax_behavior;
    public string $tax_code;
    public \StripeSDK\Enums\ShippingOptionsRequestVariant1Item\ShippingRateData\DataTypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'display_name' => is_string($value) ? $this->display_name = $value : parent::assignMember($name, $value),
            'tax_behavior' => is_string($value) ? $this->tax_behavior = \StripeSDK\Enums\ShippingOptionsRequestVariant1Item\ShippingRateData\TaxBehaviorEnum::from($value) : parent::assignMember($name, $value),
            'tax_code' => is_string($value) ? $this->tax_code = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\ShippingOptionsRequestVariant1Item\ShippingRateData\DataTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
