<?php

declare(strict_types=1);

namespace StripeSDK\V1;

final class EphemeralKeys extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/ephemeral_keys [operationId: PostEphemeralKeys] */
    /**
     * Create an ephemeral key
     *
     * <p>Creates a short-lived API key for a given resource.</p>
     */
    public static function post(?\StripeSDK\Requests\V1\EphemeralKeys\Post $payload = null): \StripeSDK\DTOs\EphemeralKey|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\EphemeralKeys::class)->post($payload);
    }

    /** DELETE /v1/ephemeral_keys/{key} [operationId: DeleteEphemeralKeysKey] */
    /**
     * Immediately invalidate an ephemeral key
     *
     * <p>Invalidates a short-lived API key for a given resource.</p>
     */
    public static function deleteByKey(string $key, ?\StripeSDK\Requests\V1\EphemeralKeys\ByKey\Delete $payload = null): \StripeSDK\DTOs\EphemeralKey|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\EphemeralKeys::class)->deleteByKey($key, $payload);
    }
}
