<?php

declare(strict_types=1);

namespace StripeSDK\V1\Sources\BySource;

final class Verify extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/sources/{source}/verify [operationId: PostSourcesSourceVerify] */
    /**
     * <p>Verify a given source.</p>
     */
    public static function post(string $source, \StripeSDK\Requests\V1\Sources\BySource\Verify\Post $payload): \StripeSDK\DTOs\Source|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Sources\BySource\Verify::class)->post($source, $payload);
    }
}
