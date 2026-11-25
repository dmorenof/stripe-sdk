<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Payment;

/**
 * PaymentPagesCheckoutSessionDiscount
 */
final class PagesCheckoutSessionDiscount extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Coupon attached to the Checkout Session.
     */
    public ?\StripeSDK\DTOs\Payment\PagesCheckoutSessionDiscount\CouponDTO $coupon;
    /**
     * Promotion code attached to the Checkout Session.
     */
    public ?\StripeSDK\DTOs\Payment\PagesCheckoutSessionDiscount\PromotionCodeDTO $promotion_code;
}
