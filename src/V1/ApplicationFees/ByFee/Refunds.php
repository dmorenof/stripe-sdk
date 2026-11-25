<?php

declare(strict_types=1);

namespace StripeSDK\V1\ApplicationFees\ByFee;

final class Refunds extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/application_fees/{fee}/refunds/{id} [operationId: GetApplicationFeesFeeRefundsId] */
    /**
     * Retrieve an application fee refund
     *
     * <p>By default, you can see the 10 most recent refunds stored directly on the application fee object, but you can also retrieve details about a specific refund stored on the application fee.</p>
     */
    public static function getById(\StripeSDK\PathParams\V1\ApplicationFees\ByFee\Refunds\ById $identifier, ?\StripeSDK\GetParams\V1\ApplicationFees\ByFee\Refunds\ById $params = null): \StripeSDK\DTOs\FeeRefund|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\ApplicationFees\ByFee\Refunds::class)->getById($identifier, $params);
    }

    /** POST /v1/application_fees/{fee}/refunds/{id} [operationId: PostApplicationFeesFeeRefundsId] */
    /**
     * Update an application fee refund
     *
     * <p>Updates the specified application fee refund by setting the values of the parameters passed. Any parameters not provided will be left unchanged.</p>
     *
     * <p>This request only accepts metadata as an argument.</p>
     */
    public static function postById(\StripeSDK\PathParams\V1\ApplicationFees\ByFee\Refunds\ById $identifier, ?\StripeSDK\Requests\V1\ApplicationFees\ByFee\Refunds\ById\Post $payload = null): \StripeSDK\DTOs\FeeRefund|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\ApplicationFees\ByFee\Refunds::class)->postById($identifier, $payload);
    }
}
