<?php

declare(strict_types=1);

namespace StripeSDK\V1\FinancialConnections;

final class Accounts extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/financial_connections/accounts [operationId: GetFinancialConnectionsAccounts] */
    /**
     * List Accounts
     *
     * <p>Returns a list of Financial Connections <code>Account</code> objects.</p>
     */
    public static function get(?\StripeSDK\GetParams\V1\FinancialConnections\Accounts $params = null): \StripeSDK\Responses\V1\FinancialConnections\Accounts\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\FinancialConnections\Accounts::class)->get($params);
    }

    /** GET /v1/financial_connections/accounts/{account} [operationId: GetFinancialConnectionsAccountsAccount] */
    /**
     * Retrieve an Account
     *
     * <p>Retrieves the details of a Financial Connections <code>Account</code>.</p>
     */
    public static function getByAccount(string $account, ?\StripeSDK\GetParams\V1\FinancialConnections\Accounts\ByAccount $params = null): \StripeSDK\DTOs\FinancialConnections\Account|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\FinancialConnections\Accounts::class)->getByAccount($account, $params);
    }
}
