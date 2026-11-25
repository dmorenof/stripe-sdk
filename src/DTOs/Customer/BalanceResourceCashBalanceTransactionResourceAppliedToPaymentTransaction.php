<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Customer;

/**
 * CustomerBalanceResourceCashBalanceTransactionResourceAppliedToPaymentTransaction
 */
final class BalanceResourceCashBalanceTransactionResourceAppliedToPaymentTransaction extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'payment_intent',
    ];

    /**
     * The [Payment Intent](https://docs.stripe.com/api/payment_intents/object) that funds were applied to.
     */
    public \StripeSDK\DTOs\Customer\BalanceResourceCashBalanceTransactionResourceAppliedToPaymentTransaction\PaymentIntentDTO $payment_intent;
}
