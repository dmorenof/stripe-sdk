<?php

declare(strict_types=1);

namespace StripeSDK\V1\Billing\CreditGrants\ById;

final class Expire extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/billing/credit_grants/{id}/expire [operationId: PostBillingCreditGrantsIdExpire] */
    /**
     * Expire a credit grant
     *
     * <p>Expires a credit grant.</p>
     */
    public static function post(string $id, ?\StripeSDK\Requests\V1\Billing\CreditGrants\ById\Expire\Post $payload = null): \StripeSDK\DTOs\Billing\CreditGrant|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Billing\CreditGrants\ById\Expire::class)->post($id, $payload);
    }
}
