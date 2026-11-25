<?php

declare(strict_types=1);

namespace StripeSDK\V1\Apps;

final class Secrets extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/apps/secrets [operationId: GetAppsSecrets] */
    /**
     * List secrets
     *
     * <p>List all secrets stored on the given scope.</p>
     */
    public static function get(\StripeSDK\GetParams\V1\Apps\Secrets $params): \StripeSDK\Responses\V1\Apps\Secrets\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Apps\Secrets::class)->get($params);
    }

    /** POST /v1/apps/secrets [operationId: PostAppsSecrets] */
    /**
     * Set a Secret
     *
     * <p>Create or replace a secret in the secret store.</p>
     */
    public static function post(\StripeSDK\Requests\V1\Apps\Secrets\Post $payload): \StripeSDK\DTOs\Apps\Secret|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Apps\Secrets::class)->post($payload);
    }
}
