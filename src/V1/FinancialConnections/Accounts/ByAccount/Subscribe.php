<?php

declare(strict_types=1);

namespace StripeSDK\V1\FinancialConnections\Accounts\ByAccount;

final class Subscribe extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/financial_connections/accounts/{account}/subscribe [operationId: PostFinancialConnectionsAccountsAccountSubscribe] */
    /**
     * Subscribe to data refreshes for an Account
     *
     * <p>Subscribes to periodic refreshes of data associated with a Financial Connections <code>Account</code>. When the account status is active, data is typically refreshed once a day.</p>
     */
    public static function post(string $account, \StripeSDK\Requests\V1\FinancialConnections\Accounts\ByAccount\Subscribe\Post $payload): \StripeSDK\DTOs\FinancialConnections\Account|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\FinancialConnections\Accounts\ByAccount\Subscribe::class)->post($account, $payload);
    }
}
