<?php

declare(strict_types=1);

namespace StripeSDK\V1\TestHelpers;

final class ConfirmationTokens extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/test_helpers/confirmation_tokens [operationId: PostTestHelpersConfirmationTokens] */
    /**
     * Create a test Confirmation Token
     *
     * <p>Creates a test mode Confirmation Token server side for your integration tests.</p>
     */
    public static function post(?\StripeSDK\Requests\V1\TestHelpers\ConfirmationTokens\Post $payload = null): \StripeSDK\DTOs\ConfirmationToken|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\TestHelpers\ConfirmationTokens::class)->post($payload);
    }
}
