<?php

declare(strict_types=1);

namespace StripeSDK\V1\LinkedAccounts\ByAccount;

final class Owners extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/linked_accounts/{account}/owners [operationId: GetLinkedAccountsAccountOwners] */
    /**
     * List Account Owners
     *
     * <p>Lists all owners for a given <code>Account</code></p>
     */
    public static function get(string $account, \StripeSDK\GetParams\V1\LinkedAccounts\ByAccount\Owners $params): \StripeSDK\Responses\V1\LinkedAccounts\ByAccount\Owners\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\LinkedAccounts\ByAccount\Owners::class)->get($account, $params);
    }
}
