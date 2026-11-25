<?php

declare(strict_types=1);

namespace StripeSDK\V1;

final class AccountSessions extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/account_sessions [operationId: PostAccountSessions] */
    /**
     * Create an Account Session
     *
     * <p>Creates an AccountSession object that includes a single-use token that the platform can use on their front-end to grant client-side API access.</p>
     */
    public static function post(\StripeSDK\Requests\V1\AccountSessions\Post $payload): \StripeSDK\DTOs\Account\Session|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\AccountSessions::class)->post($payload);
    }
}
