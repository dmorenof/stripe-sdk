<?php

declare(strict_types=1);

namespace StripeSDK\DTOs;

/**
 * DiscountsResourceStackableDiscountWithDiscountEnd
 */
final class DiscountsResourceStackableDiscountWithDiscountEnd extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * ID of the coupon to create a new discount for.
     */
    public ?\StripeSDK\DTOs\DiscountsResourceStackableDiscountWithDiscountEnd\CouponDTO $coupon;
    /**
     * ID of an existing discount on the object (or one of its ancestors) to reuse.
     */
    public ?\StripeSDK\DTOs\DiscountsResourceStackableDiscountWithDiscountEnd\DiscountDTO $discount;
    /**
     * ID of the promotion code to create a new discount for.
     */
    public ?\StripeSDK\DTOs\DiscountsResourceStackableDiscountWithDiscountEnd\PromotionCodeDTO $promotion_code;
}
