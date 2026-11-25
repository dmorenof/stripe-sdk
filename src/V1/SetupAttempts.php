<?php

declare(strict_types=1);

namespace StripeSDK\V1;

final class SetupAttempts extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/setup_attempts [operationId: GetSetupAttempts] */
    /**
     * List all SetupAttempts
     *
     * <p>Returns a list of SetupAttempts that associate with a provided SetupIntent.</p>
     */
    public static function get(\StripeSDK\GetParams\V1\SetupAttempts $params): \StripeSDK\Responses\V1\SetupAttempts\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\SetupAttempts::class)->get($params);
    }
}
