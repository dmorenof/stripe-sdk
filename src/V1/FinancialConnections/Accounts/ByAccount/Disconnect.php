<?php

declare(strict_types=1);

namespace StripeSDK\V1\FinancialConnections\Accounts\ByAccount;

final class Disconnect extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/financial_connections/accounts/{account}/disconnect [operationId: PostFinancialConnectionsAccountsAccountDisconnect] */
    /**
     * Disconnect an Account
     *
     * <p>Disables your access to a Financial Connections <code>Account</code>. You will no longer be able to access data associated with the account (e.g. balances, transactions).</p>
     */
    public static function post(string $account, ?\StripeSDK\Requests\V1\FinancialConnections\Accounts\ByAccount\Disconnect\Post $payload = null): \StripeSDK\DTOs\FinancialConnections\Account|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\FinancialConnections\Accounts\ByAccount\Disconnect::class)->post($account, $payload);
    }
}
