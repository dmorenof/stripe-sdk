<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Customer;

/**
 * CustomerBalanceResourceCashBalanceTransactionResourceRefundedFromPaymentTransaction
 */
final class BalanceResourceCashBalanceTransactionResourceRefundedFromPaymentTransaction extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'refund',
    ];

    /**
     * The [Refund](https://docs.stripe.com/api/refunds/object) that moved these funds into the customer's cash balance.
     */
    public \StripeSDK\DTOs\Customer\BalanceResourceCashBalanceTransactionResourceRefundedFromPaymentTransaction\RefundDTO $refund;
}
