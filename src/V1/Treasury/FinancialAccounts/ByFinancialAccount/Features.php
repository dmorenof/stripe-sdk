<?php

declare(strict_types=1);

namespace StripeSDK\V1\Treasury\FinancialAccounts\ByFinancialAccount;

final class Features extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/treasury/financial_accounts/{financial_account}/features [operationId: GetTreasuryFinancialAccountsFinancialAccountFeatures] */
    /**
     * Retrieve FinancialAccount Features
     *
     * <p>Retrieves Features information associated with the FinancialAccount.</p>
     */
    public static function get(string $financial_account, ?\StripeSDK\GetParams\V1\Treasury\FinancialAccounts\ByFinancialAccount\Features $params = null): \StripeSDK\DTOs\Treasury\FinancialAccountFeatures|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Treasury\FinancialAccounts\ByFinancialAccount\Features::class)->get($financial_account, $params);
    }

    /** POST /v1/treasury/financial_accounts/{financial_account}/features [operationId: PostTreasuryFinancialAccountsFinancialAccountFeatures] */
    /**
     * Update FinancialAccount Features
     *
     * <p>Updates the Features associated with a FinancialAccount.</p>
     */
    public static function post(string $financial_account, ?\StripeSDK\Requests\V1\Treasury\FinancialAccounts\ByFinancialAccount\Features\Post $payload = null): \StripeSDK\DTOs\Treasury\FinancialAccountFeatures|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Treasury\FinancialAccounts\ByFinancialAccount\Features::class)->post($financial_account, $payload);
    }
}
