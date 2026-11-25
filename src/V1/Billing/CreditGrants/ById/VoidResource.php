<?php

declare(strict_types=1);

namespace StripeSDK\V1\Billing\CreditGrants\ById;

final class VoidResource extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/billing/credit_grants/{id}/void [operationId: PostBillingCreditGrantsIdVoid] */
    /**
     * Void a credit grant
     *
     * <p>Voids a credit grant.</p>
     */
    public static function post(string $id, ?\StripeSDK\Requests\V1\Billing\CreditGrants\ById\VoidResource\Post $payload = null): \StripeSDK\DTOs\Billing\CreditGrant|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Billing\CreditGrants\ById\VoidResource::class)->post($id, $payload);
    }
}
