<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\ShippingRates\ByShippingRateToken;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Whether the shipping rate can be used for new purchases. Defaults to `true`.
     */
    public bool $active;
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * Describes a fixed amount to charge for shipping. Must be present if type is `fixed_amount`.
     */
    public \StripeSDK\Requests\V1\ShippingRates\ByShippingRateToken\Post\FixedAmountRequest $fixed_amount;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format. Individual keys can be unset by posting an empty value to them. All keys can be unset by posting an empty value to `metadata`.
     */
    public \StripeSDK\Requests\V1\ShippingRates\ByShippingRateToken\Post\ByShippingRateTokenMetadataRequest $metadata;
    /**
     * Specifies whether the rate is considered inclusive of taxes or exclusive of taxes. One of `inclusive`, `exclusive`, or `unspecified`.
     */
    public \StripeSDK\Enums\V1\ShippingRates\ByShippingRateToken\Post\TaxBehaviorEnum $tax_behavior;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'active' => is_bool($value) ? $this->active = $value : parent::assignMember($name, $value),
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            'tax_behavior' => is_string($value) ? $this->tax_behavior = \StripeSDK\Enums\V1\ShippingRates\ByShippingRateToken\Post\TaxBehaviorEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
