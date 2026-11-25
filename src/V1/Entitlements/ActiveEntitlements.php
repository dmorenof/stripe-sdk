<?php

declare(strict_types=1);

namespace StripeSDK\V1\Entitlements;

final class ActiveEntitlements extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/entitlements/active_entitlements [operationId: GetEntitlementsActiveEntitlements] */
    /**
     * List all active entitlements
     *
     * <p>Retrieve a list of active entitlements for a customer</p>
     */
    public static function get(\StripeSDK\GetParams\V1\Entitlements\ActiveEntitlements $params): \StripeSDK\Responses\V1\Entitlements\ActiveEntitlements\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Entitlements\ActiveEntitlements::class)->get($params);
    }

    /** GET /v1/entitlements/active_entitlements/{id} [operationId: GetEntitlementsActiveEntitlementsId] */
    /**
     * Retrieve an active entitlement
     *
     * <p>Retrieve an active entitlement</p>
     */
    public static function getById(string $id, ?\StripeSDK\GetParams\V1\Entitlements\ActiveEntitlements\ById $params = null): \StripeSDK\DTOs\Entitlements\ActiveEntitlement|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Entitlements\ActiveEntitlements::class)->getById($id, $params);
    }
}
