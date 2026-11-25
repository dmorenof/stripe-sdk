<?php

declare(strict_types=1);

namespace StripeSDK\V1\Apps\Secrets;

final class Find extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/apps/secrets/find [operationId: GetAppsSecretsFind] */
    /**
     * Find a Secret
     *
     * <p>Finds a secret in the secret store by name and scope.</p>
     */
    public static function get(\StripeSDK\GetParams\V1\Apps\Secrets\Find $params): \StripeSDK\DTOs\Apps\Secret|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Apps\Secrets\Find::class)->get($params);
    }
}
