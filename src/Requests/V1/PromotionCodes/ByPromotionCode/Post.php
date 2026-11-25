<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PromotionCodes\ByPromotionCode;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Whether the promotion code is currently active. A promotion code can only be reactivated when the coupon is still valid and the promotion code is otherwise redeemable.
     */
    public bool $active;
    /**
     * Specifies which fields in the response should be expanded.
     */
    public \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection $expand;
    /**
     * Set of [key-value pairs](https://docs.stripe.com/api/metadata) that you can attach to an object. This can be useful for storing additional information about the object in a structured format. Individual keys can be unset by posting an empty value to them. All keys can be unset by posting an empty value to `metadata`.
     */
    public \StripeSDK\Requests\V1\PromotionCodes\ByPromotionCode\Post\ByPromotionCodeMetadataRequest $metadata;
    /**
     * Settings that restrict the redemption of the promotion code.
     */
    public \StripeSDK\Requests\V1\PromotionCodes\ByPromotionCode\Post\ByPromotionCodeRestrictionsRequest $restrictions;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'active' => is_bool($value) ? $this->active = $value : parent::assignMember($name, $value),
            'expand' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->expand = new \StripeSDK\Collections\Account\CapabilityFutureRequirements\CurrentlyDueCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
