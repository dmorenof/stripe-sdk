<?php

declare(strict_types=1);

namespace StripeSDK\V1\Apps\Secrets;

final class Delete extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/apps/secrets/delete [operationId: PostAppsSecretsDelete] */
    /**
     * Delete a Secret
     *
     * <p>Deletes a secret from the secret store by name and scope.</p>
     */
    public static function post(\StripeSDK\Requests\V1\Apps\Secrets\Delete\Post $payload): \StripeSDK\DTOs\Apps\Secret|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Apps\Secrets\Delete::class)->post($payload);
    }
}
