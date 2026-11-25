<?php

declare(strict_types=1);

namespace StripeSDK\V1\LinkedAccounts\ByAccount;

final class Disconnect extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/linked_accounts/{account}/disconnect [operationId: PostLinkedAccountsAccountDisconnect] */
    /**
     * Disconnect an Account
     *
     * <p>Disables your access to a Financial Connections <code>Account</code>. You will no longer be able to access data associated with the account (e.g. balances, transactions).</p>
     */
    public static function post(string $account, ?\StripeSDK\Requests\V1\LinkedAccounts\ByAccount\Disconnect\Post $payload = null): \StripeSDK\DTOs\FinancialConnections\Account|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\LinkedAccounts\ByAccount\Disconnect::class)->post($account, $payload);
    }
}
