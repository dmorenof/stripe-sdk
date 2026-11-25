<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentMethodConfigurations\ByConfiguration\Post;

/**
 * payment_method_param
 *
 * Stripe users in the UK can accept Bacs Direct Debit payments from customers with a UK bank account, check this [page](https://docs.stripe.com/payments/payment-methods/bacs-debit) for more details.
 */
final class BacsDebitRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\PaymentMethodConfigurations\ByConfiguration\Post\BacsDebit\DisplayPreferenceRequest $display_preference;
}
