<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\ShippingRates;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'display_name',
    ];

    protected const array VALIDATION = [
        'display_name' => [
            'maxLength' => 100,
        ],
    ];

    /**
     * The estimated range for how long shipping will take, meant to be displayable to the customer. This will appear on CheckoutSessions.
     */
    public \StripeSDK\Requests\V1\ShippingRates\Post\DeliveryEstimateRequest $delivery_estimate;
    /**
     * The name of the shipping rate, meant to be displayable to the customer. This will appear on CheckoutSessions.
     */
    public string $display_name {
        set {
            $this->assigning('display_name', $value);
            $this->display_name = $value;
        }
    }
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * Describes a fixed amount to charge for shipping. Must be present if type is `fixed_amount`.
     */
    public \StripeSDK\Requests\V1\ShippingRates\Post\FixedAmountRequest $fixed_amount;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format. Individual keys can be unset by posting an empty value to them. All keys can be unset by posting an empty value to `metadata`.
     */
    public \StripeSDK\Requests\V1\ShippingRates\Post\MetadataMapRequest $metadata;
    /**
     * Specifies whether the rate is considered inclusive of taxes or exclusive of taxes. One of `inclusive`, `exclusive`, or `unspecified`.
     */
    public \StripeSDK\Enums\V1\ShippingRates\Post\TaxBehaviorEnum $tax_behavior;
    /**
     * A [tax code](https://docs.stripe.com/tax/tax-categories) ID. The Shipping tax code is `txcd_92010001`.
     */
    public string $tax_code;
    /**
     * The type of calculation to use on the shipping rate.
     */
    public \StripeSDK\Enums\V1\ShippingRates\Post\ShippingRatesTypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'display_name' => is_string($value) ? $this->display_name = $value : parent::assignMember($name, $value),
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'tax_behavior' => is_string($value) ? $this->tax_behavior = \StripeSDK\Enums\V1\ShippingRates\Post\TaxBehaviorEnum::from($value) : parent::assignMember($name, $value),
            'tax_code' => is_string($value) ? $this->tax_code = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \StripeSDK\Enums\V1\ShippingRates\Post\ShippingRatesTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
