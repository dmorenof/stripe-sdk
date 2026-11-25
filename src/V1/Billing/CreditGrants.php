<?php

declare(strict_types=1);

namespace StripeSDK\V1\Billing;

final class CreditGrants extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/billing/credit_grants [operationId: GetBillingCreditGrants] */
    /**
     * List credit grants
     *
     * <p>Retrieve a list of credit grants.</p>
     */
    public static function get(?\StripeSDK\GetParams\V1\Billing\CreditGrants $params = null): \StripeSDK\Responses\V1\Billing\CreditGrants\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Billing\CreditGrants::class)->get($params);
    }

    /** POST /v1/billing/credit_grants [operationId: PostBillingCreditGrants] */
    /**
     * Create a credit grant
     *
     * <p>Creates a credit grant.</p>
     */
    public static function post(\StripeSDK\Requests\V1\Billing\CreditGrants\Post $payload): \StripeSDK\DTOs\Billing\CreditGrant|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Billing\CreditGrants::class)->post($payload);
    }

    /** GET /v1/billing/credit_grants/{id} [operationId: GetBillingCreditGrantsId] */
    /**
     * Retrieve a credit grant
     *
     * <p>Retrieves a credit grant.</p>
     */
    public static function getById(string $id, ?\StripeSDK\GetParams\V1\Billing\CreditGrants\ById $params = null): \StripeSDK\DTOs\Billing\CreditGrant|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Billing\CreditGrants::class)->getById($id, $params);
    }

    /** POST /v1/billing/credit_grants/{id} [operationId: PostBillingCreditGrantsId] */
    /**
     * Update a credit grant
     *
     * <p>Updates a credit grant.</p>
     */
    public static function postById(string $id, ?\StripeSDK\Requests\V1\Billing\CreditGrants\ById\Post $payload = null): \StripeSDK\DTOs\Billing\CreditGrant|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Billing\CreditGrants::class)->postById($id, $payload);
    }
}
