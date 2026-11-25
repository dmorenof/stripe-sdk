<?php

declare(strict_types=1);

namespace StripeSDK\V1\Entitlements;

final class Features extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/entitlements/features [operationId: GetEntitlementsFeatures] */
    /**
     * List all features
     *
     * <p>Retrieve a list of features</p>
     */
    public static function get(?\StripeSDK\GetParams\V1\Entitlements\Features $params = null): \StripeSDK\Responses\V1\Entitlements\Features\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Entitlements\Features::class)->get($params);
    }

    /** POST /v1/entitlements/features [operationId: PostEntitlementsFeatures] */
    /**
     * Create a feature
     *
     * <p>Creates a feature</p>
     */
    public static function post(\StripeSDK\Requests\V1\Entitlements\Features\Post $payload): \StripeSDK\DTOs\Entitlements\Feature|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Entitlements\Features::class)->post($payload);
    }

    /** GET /v1/entitlements/features/{id} [operationId: GetEntitlementsFeaturesId] */
    /**
     * Retrieve a feature
     *
     * <p>Retrieves a feature</p>
     */
    public static function getById(string $id, ?\StripeSDK\GetParams\V1\Entitlements\Features\ById $params = null): \StripeSDK\DTOs\Entitlements\Feature|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Entitlements\Features::class)->getById($id, $params);
    }

    /** POST /v1/entitlements/features/{id} [operationId: PostEntitlementsFeaturesId] */
    /**
     * Updates a feature
     *
     * <p>Update a feature’s metadata or permanently deactivate it.</p>
     */
    public static function postById(string $id, ?\StripeSDK\Requests\V1\Entitlements\Features\ById\Post $payload = null): \StripeSDK\DTOs\Entitlements\Feature|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Entitlements\Features::class)->postById($id, $payload);
    }
}
