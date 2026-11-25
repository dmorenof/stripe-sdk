<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * StackableDiscountWithDiscountSettingsAndDiscountEnd
 */
final class StackableDiscountWithDiscountSettingsAndDiscountEnd extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * ID of the coupon to create a new discount for.
     */
    public ?\StripeSDK\DTOs\StackableDiscountWithDiscountSettingsAndDiscountEnd\CouponDTO $coupon;
    /**
     * ID of an existing discount on the object (or one of its ancestors) to reuse.
     */
    public ?\StripeSDK\DTOs\StackableDiscountWithDiscountSettingsAndDiscountEnd\DiscountDTO $discount;
    /**
     * ID of the promotion code to create a new discount for.
     */
    public ?\StripeSDK\DTOs\StackableDiscountWithDiscountSettingsAndDiscountEnd\PromotionCodeDTO $promotion_code;
}
