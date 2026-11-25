<?php

declare(strict_types=1);

namespace StripeSDK\V1\Treasury\FinancialAccounts\ByFinancialAccount;

final class Close extends \StripeSDK\StripeAPISDK
{
    /** POST /v1/treasury/financial_accounts/{financial_account}/close [operationId: PostTreasuryFinancialAccountsFinancialAccountClose] */
    /**
     * Close a FinancialAccount
     *
     * <p>Closes a FinancialAccount. A FinancialAccount can only be closed if it has a zero balance, has no pending InboundTransfers, and has canceled all attached Issuing cards.</p>
     */
    public static function post(string $financial_account, ?\StripeSDK\Requests\V1\Treasury\FinancialAccounts\ByFinancialAccount\Close\Post $payload = null): \StripeSDK\DTOs\Treasury\FinancialAccount|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Treasury\FinancialAccounts\ByFinancialAccount\Close::class)->post($financial_account, $payload);
    }
}
