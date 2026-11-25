<?php

declare(strict_types=1);

namespace StripeSDK\V1\Treasury;

final class FinancialAccounts extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/treasury/financial_accounts [operationId: GetTreasuryFinancialAccounts] */
    /**
     * List all FinancialAccounts
     *
     * <p>Returns a list of FinancialAccounts.</p>
     */
    public static function get(?\StripeSDK\GetParams\V1\Treasury\FinancialAccounts $params = null): \StripeSDK\Responses\V1\Treasury\FinancialAccounts\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Treasury\FinancialAccounts::class)->get($params);
    }

    /** POST /v1/treasury/financial_accounts [operationId: PostTreasuryFinancialAccounts] */
    /**
     * Create a FinancialAccount
     *
     * <p>Creates a new FinancialAccount. Each connected account can have up to three FinancialAccounts by default.</p>
     */
    public static function post(\StripeSDK\Requests\V1\Treasury\FinancialAccounts\Post $payload): \StripeSDK\DTOs\Treasury\FinancialAccount|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Treasury\FinancialAccounts::class)->post($payload);
    }

    /** GET /v1/treasury/financial_accounts/{financial_account} [operationId: GetTreasuryFinancialAccountsFinancialAccount] */
    /**
     * Retrieve a FinancialAccount
     *
     * <p>Retrieves the details of a FinancialAccount.</p>
     */
    public static function getByFinancialAccount(string $financial_account, ?\StripeSDK\GetParams\V1\Treasury\FinancialAccounts\ByFinancialAccount $params = null): \StripeSDK\DTOs\Treasury\FinancialAccount|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Treasury\FinancialAccounts::class)->getByFinancialAccount($financial_account, $params);
    }

    /** POST /v1/treasury/financial_accounts/{financial_account} [operationId: PostTreasuryFinancialAccountsFinancialAccount] */
    /**
     * Update a FinancialAccount
     *
     * <p>Updates the details of a FinancialAccount.</p>
     */
    public static function postByFinancialAccount(string $financial_account, ?\StripeSDK\Requests\V1\Treasury\FinancialAccounts\ByFinancialAccount\Post $payload = null): \StripeSDK\DTOs\Treasury\FinancialAccount|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Treasury\FinancialAccounts::class)->postByFinancialAccount($financial_account, $payload);
    }
}
