<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Customer;

/**
 * CustomerBalanceResourceCashBalanceTransactionResourceTransferredToBalance
 */
final class BalanceResourceCashBalanceTransactionResourceTransferredToBalance extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'balance_transaction',
    ];

    /**
     * The [Balance Transaction](https://docs.stripe.com/api/balance_transactions/object) that corresponds to funds transferred to your Stripe balance.
     */
    public \StripeSDK\DTOs\Customer\BalanceResourceCashBalanceTransactionResourceTransferredToBalance\BalanceTransactionDTO $balance_transaction;
}
