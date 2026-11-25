<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * StackableDiscountWithDiscountSettings
 */
final class StackableDiscountWithDiscountSettings extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * ID of the coupon to create a new discount for.
     */
    public ?\StripeSDK\DTOs\StackableDiscountWithDiscountSettings\CouponDTO $coupon;
    /**
     * ID of an existing discount on the object (or one of its ancestors) to reuse.
     */
    public ?\StripeSDK\DTOs\StackableDiscountWithDiscountSettings\DiscountDTO $discount;
    /**
     * ID of the promotion code to create a new discount for.
     */
    public ?\StripeSDK\DTOs\StackableDiscountWithDiscountSettings\PromotionCodeDTO $promotion_code;
}
