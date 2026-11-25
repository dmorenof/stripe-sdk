<?php

declare(strict_types=1);

namespace StripeSDK\V1;

final class PromotionCodes extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/promotion_codes [operationId: GetPromotionCodes] */
    /**
     * List all promotion codes
     *
     * <p>Returns a list of your promotion codes.</p>
     */
    public static function get(?\StripeSDK\GetParams\V1\PromotionCodes $params = null): \StripeSDK\Responses\V1\PromotionCodes\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\PromotionCodes::class)->get($params);
    }

    /** POST /v1/promotion_codes [operationId: PostPromotionCodes] */
    /**
     * Create a promotion code
     *
     * <p>A promotion code points to an underlying promotion. You can optionally restrict the code to a specific customer, redemption limit, and expiration date.</p>
     */
    public static function post(\StripeSDK\Requests\V1\PromotionCodes\Post $payload): \StripeSDK\DTOs\Promotion\Code|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\PromotionCodes::class)->post($payload);
    }

    /** GET /v1/promotion_codes/{promotion_code} [operationId: GetPromotionCodesPromotionCode] */
    /**
     * Retrieve a promotion code
     *
     * <p>Retrieves the promotion code with the given ID. In order to retrieve a promotion code by the customer-facing <code>code</code> use <a href="/docs/api/promotion_codes/list">list</a> with the desired <code>code</code>.</p>
     */
    public static function getByPromotionCode(string $promotion_code, ?\StripeSDK\GetParams\V1\PromotionCodes\ByPromotionCode $params = null): \StripeSDK\DTOs\Promotion\Code|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\PromotionCodes::class)->getByPromotionCode($promotion_code, $params);
    }

    /** POST /v1/promotion_codes/{promotion_code} [operationId: PostPromotionCodesPromotionCode] */
    /**
     * Update a promotion code
     *
     * <p>Updates the specified promotion code by setting the values of the parameters passed. Most fields are, by design, not editable.</p>
     */
    public static function postByPromotionCode(string $promotion_code, ?\StripeSDK\Requests\V1\PromotionCodes\ByPromotionCode\Post $payload = null): \StripeSDK\DTOs\Promotion\Code|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\PromotionCodes::class)->postByPromotionCode($promotion_code, $payload);
    }
}
