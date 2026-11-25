<?php

declare(strict_types=1);

namespace StripeSDK\V1\Billing;

final class Meters extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/billing/meters [operationId: GetBillingMeters] */
    /**
     * List billing meters
     *
     * <p>Retrieve a list of billing meters.</p>
     */
    public static function get(?\StripeSDK\GetParams\V1\Billing\Meters $params = null): \StripeSDK\Responses\V1\Billing\Meters\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Billing\Meters::class)->get($params);
    }

    /** POST /v1/billing/meters [operationId: PostBillingMeters] */
    /**
     * Create a billing meter
     *
     * <p>Creates a billing meter.</p>
     */
    public static function post(\StripeSDK\Requests\V1\Billing\Meters\Post $payload): \StripeSDK\DTOs\Billing\Meter|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Billing\Meters::class)->post($payload);
    }

    /** GET /v1/billing/meters/{id} [operationId: GetBillingMetersId] */
    /**
     * Retrieve a billing meter
     *
     * <p>Retrieves a billing meter given an ID.</p>
     */
    public static function getById(string $id, ?\StripeSDK\GetParams\V1\Billing\Meters\ById $params = null): \StripeSDK\DTOs\Billing\Meter|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Billing\Meters::class)->getById($id, $params);
    }

    /** POST /v1/billing/meters/{id} [operationId: PostBillingMetersId] */
    /**
     * Update a billing meter
     *
     * <p>Updates a billing meter.</p>
     */
    public static function postById(string $id, ?\StripeSDK\Requests\V1\Billing\Meters\ById\Post $payload = null): \StripeSDK\DTOs\Billing\Meter|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Billing\Meters::class)->postById($id, $payload);
    }
}
