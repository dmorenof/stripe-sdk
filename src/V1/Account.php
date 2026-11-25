<?php

declare(strict_types=1);

namespace StripeSDK\V1;

final class Account extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/account [operationId: GetAccount] */
    /**
     * Retrieve account
     *
     * <p>Retrieves the details of an account.</p>
     */
    public static function get(?\StripeSDK\GetParams\V1\Account $params = null): \StripeSDK\DTOs\Account|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Account::class)->get($params);
    }
}
