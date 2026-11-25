<?php

declare(strict_types=1);

namespace StripeSDK\V1\Billing;

final class CreditBalanceTransactions extends \StripeSDK\StripeAPISDK
{
    /** GET /v1/billing/credit_balance_transactions [operationId: GetBillingCreditBalanceTransactions] */
    /**
     * List credit balance transactions
     *
     * <p>Retrieve a list of credit balance transactions.</p>
     */
    public static function get(?\StripeSDK\GetParams\V1\Billing\CreditBalanceTransactions $params = null): \StripeSDK\Responses\V1\Billing\CreditBalanceTransactions\GetStatus200|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Billing\CreditBalanceTransactions::class)->get($params);
    }

    /** GET /v1/billing/credit_balance_transactions/{id} [operationId: GetBillingCreditBalanceTransactionsId] */
    /**
     * Retrieve a credit balance transaction
     *
     * <p>Retrieves a credit balance transaction.</p>
     */
    public static function getById(string $id, ?\StripeSDK\GetParams\V1\Billing\CreditBalanceTransactions\ById $params = null): \StripeSDK\DTOs\Billing\CreditBalanceTransaction|\StripeSDK\DTOs\Error|null
    {
        return self::client()->resource(\StripeSDK\Resources\V1\Billing\CreditBalanceTransactions::class)->getById($id, $params);
    }
}
