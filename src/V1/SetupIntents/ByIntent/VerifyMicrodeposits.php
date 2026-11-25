<?php

declare(strict_types=1);

namespace StripeSDK\V1\SetupIntents\ByIntent;

final class VerifyMicrodeposits extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/setup_intents/{intent}/verify_microdeposits [operationId: PostSetupIntentsIntentVerifyMicrodeposits] */
    /**
     * Verify microdeposits on a SetupIntent
     *
     * <p>Verifies microdeposits on a SetupIntent object.</p>
     */
    public static function post(string $intent, ?\StripeSDK\Requests\V1\SetupIntents\ByIntent\VerifyMicrodeposits\Post $payload = null): \StripeSDK\DTOs\Setup\Intent|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\SetupIntents\ByIntent\VerifyMicrodeposits::class)->post($intent, $payload);
    }
}
