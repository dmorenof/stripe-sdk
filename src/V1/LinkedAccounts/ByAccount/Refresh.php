<?php

declare(strict_types=1);

namespace StripeSDK\V1\LinkedAccounts\ByAccount;

final class Refresh extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/linked_accounts/{account}/refresh [operationId: PostLinkedAccountsAccountRefresh] */
    /**
     * Refresh Account data
     *
     * <p>Refreshes the data associated with a Financial Connections <code>Account</code>.</p>
     */
    public static function post(string $account, \StripeSDK\Requests\V1\LinkedAccounts\ByAccount\Refresh\Post $payload): \StripeSDK\DTOs\FinancialConnections\Account|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\LinkedAccounts\ByAccount\Refresh::class)->post($account, $payload);
    }
}
