<?php

declare(strict_types=1);

namespace StripeSDK\V1;

final class Coupons extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/coupons [operationId: GetCoupons] */
    /**
     * List all coupons
     *
     * <p>Returns a list of your coupons.</p>
     */
    public static function get(?\StripeSDK\GetParams\V1\Coupons $params = null): \StripeSDK\Responses\V1\Coupons\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Coupons::class)->get($params);
    }

    /** POST /v1/coupons [operationId: PostCoupons] */
    /**
     * Create a coupon
     *
     * <p>You can create coupons easily via the <a href="https://dashboard.stripe.com/coupons">coupon management</a> page of the Stripe dashboard. Coupon creation is also accessible via the API if you need to create coupons on the fly.</p>
     *
     * <p>A coupon has either a <code>percent_off</code> or an <code>amount_off</code> and <code>currency</code>. If you set an <code>amount_off</code>, that amount will be subtracted from any invoice’s subtotal. For example, an invoice with a subtotal of <currency>100</currency> will have a final total of <currency>0</currency> if a coupon with an <code>amount_off</code> of <amount>200</amount> is applied to it and an invoice with a subtotal of <currency>300</currency> will have a final total of <currency>100</currency> if a coupon with an <code>amount_off</code> of <amount>200</amount> is applied to it.</p>
     */
    public static function post(?\StripeSDK\Requests\V1\Coupons\Post $payload = null): \StripeSDK\DTOs\Coupon|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Coupons::class)->post($payload);
    }

    /** DELETE /v1/coupons/{coupon} [operationId: DeleteCouponsCoupon] */
    /**
     * Delete a coupon
     *
     * <p>You can delete coupons via the <a href="https://dashboard.stripe.com/coupons">coupon management</a> page of the Stripe dashboard. However, deleting a coupon does not affect any customers who have already applied the coupon; it means that new customers can’t redeem the coupon. You can also delete coupons via the API.</p>
     */
    public static function deleteByCoupon(string $coupon, ?\StripeSDK\Requests\V1\Coupons\ByCoupon\Delete $payload = null): \StripeSDK\DTOs\Deleted\Coupon|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Coupons::class)->deleteByCoupon($coupon, $payload);
    }

    /** GET /v1/coupons/{coupon} [operationId: GetCouponsCoupon] */
    /**
     * Retrieve a coupon
     *
     * <p>Retrieves the coupon with the given ID.</p>
     */
    public static function getByCoupon(string $coupon, ?\StripeSDK\GetParams\V1\Coupons\ByCoupon $params = null): \StripeSDK\DTOs\Coupon|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Coupons::class)->getByCoupon($coupon, $params);
    }

    /** POST /v1/coupons/{coupon} [operationId: PostCouponsCoupon] */
    /**
     * Update a coupon
     *
     * <p>Updates the metadata of a coupon. Other coupon details (currency, duration, amount_off) are, by design, not editable.</p>
     */
    public static function postByCoupon(string $coupon, ?\StripeSDK\Requests\V1\Coupons\ByCoupon\Post $payload = null): \StripeSDK\DTOs\Coupon|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Coupons::class)->postByCoupon($coupon, $payload);
    }
}
