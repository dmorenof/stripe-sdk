<?php

declare(strict_types=1);

namespace StripeSDK\V1;

final class Balance extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/balance [operationId: GetBalance] */
    /**
     * Retrieve balance
     *
     * <p>Retrieves the current account balance, based on the authentication that was used to make the request.
     *  For a sample request, see <a href="/docs/connect/account-balances#accounting-for-negative-balances">Accounting for negative balances</a>.</p>
     */
    public static function get(?\StripeSDK\GetParams\V1\Balance $params = null): \StripeSDK\DTOs\Balance|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Balance::class)->get($params);
    }
}
