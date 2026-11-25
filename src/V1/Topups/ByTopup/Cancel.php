<?php

declare(strict_types=1);

namespace StripeSDK\V1\Topups\ByTopup;

final class Cancel extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/topups/{topup}/cancel [operationId: PostTopupsTopupCancel] */
    /**
     * Cancel a top-up
     *
     * <p>Cancels a top-up. Only pending top-ups can be canceled.</p>
     */
    public static function post(string $topup, ?\StripeSDK\Requests\V1\Topups\ByTopup\Cancel\Post $payload = null): \StripeSDK\DTOs\Topup|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Topups\ByTopup\Cancel::class)->post($topup, $payload);
    }
}
