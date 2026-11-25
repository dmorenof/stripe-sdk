<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Customer;

/**
 * CustomerBalanceResourceCashBalanceTransactionResourceAdjustedForOverdraft
 */
final class BalanceResourceCashBalanceTransactionResourceAdjustedForOverdraft extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'balance_transaction',
        'linked_transaction',
    ];

    /**
     * The [Balance Transaction](https://docs.stripe.com/api/balance_transactions/object) that corresponds to funds taken out of your Stripe balance.
     */
    public \StripeSDK\DTOs\Customer\BalanceResourceCashBalanceTransactionResourceAdjustedForOverdraft\BalanceTransactionDTO $balance_transaction;
    /**
     * The [Cash Balance Transaction](https://docs.stripe.com/api/cash_balance_transactions/object) that brought the customer balance negative, triggering the clawback of funds.
     */
    public \StripeSDK\DTOs\Customer\BalanceResourceCashBalanceTransactionResourceAdjustedForOverdraft\LinkedTransactionDTO $linked_transaction;
}
