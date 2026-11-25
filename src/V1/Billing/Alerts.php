<?php

declare(strict_types=1);

namespace StripeSDK\V1\Billing;

final class Alerts extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/billing/alerts [operationId: GetBillingAlerts] */
    /**
     * List billing alerts
     *
     * <p>Lists billing active and inactive alerts</p>
     */
    public static function get(?\StripeSDK\GetParams\V1\Billing\Alerts $params = null): \StripeSDK\Responses\V1\Billing\Alerts\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Billing\Alerts::class)->get($params);
    }

    /** POST /v1/billing/alerts [operationId: PostBillingAlerts] */
    /**
     * Create a billing alert
     *
     * <p>Creates a billing alert</p>
     */
    public static function post(\StripeSDK\Requests\V1\Billing\Alerts\Post $payload): \StripeSDK\DTOs\Billing\Alert|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Billing\Alerts::class)->post($payload);
    }

    /** GET /v1/billing/alerts/{id} [operationId: GetBillingAlertsId] */
    /**
     * Retrieve a billing alert
     *
     * <p>Retrieves a billing alert given an ID</p>
     */
    public static function getById(string $id, ?\StripeSDK\GetParams\V1\Billing\Alerts\ById $params = null): \StripeSDK\DTOs\Billing\Alert|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Billing\Alerts::class)->getById($id, $params);
    }
}
