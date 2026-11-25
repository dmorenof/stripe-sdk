<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Customer;

/**
 * CustomerBalanceResourceCashBalanceTransactionResourceUnappliedFromPaymentTransaction
 */
final class BalanceResourceCashBalanceTransactionResourceUnappliedFromPaymentTransaction extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'payment_intent',
    ];

    /**
     * The [Payment Intent](https://docs.stripe.com/api/payment_intents/object) that funds were unapplied from.
     */
    public \StripeSDK\DTOs\Customer\BalanceResourceCashBalanceTransactionResourceUnappliedFromPaymentTransaction\PaymentIntentDTO $payment_intent;
}
