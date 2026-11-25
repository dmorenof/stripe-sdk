<?php

declare(strict_types=1);

namespace StripeSDK\V1;

final class LinkedAccounts extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/linked_accounts [operationId: GetLinkedAccounts] */
    /**
     * List Accounts
     *
     * <p>Returns a list of Financial Connections <code>Account</code> objects.</p>
     */
    public static function get(?\StripeSDK\GetParams\V1\LinkedAccounts $params = null): \StripeSDK\Responses\V1\LinkedAccounts\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\LinkedAccounts::class)->get($params);
    }

    /** GET /v1/linked_accounts/{account} [operationId: GetLinkedAccountsAccount] */
    /**
     * Retrieve an Account
     *
     * <p>Retrieves the details of a Financial Connections <code>Account</code>.</p>
     */
    public static function getByAccount(string $account, ?\StripeSDK\GetParams\V1\LinkedAccounts\ByAccount $params = null): \StripeSDK\DTOs\FinancialConnections\Account|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\LinkedAccounts::class)->getByAccount($account, $params);
    }
}
