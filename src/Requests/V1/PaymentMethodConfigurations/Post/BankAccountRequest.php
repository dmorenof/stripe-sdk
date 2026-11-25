<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentMethodConfigurations\Post;

/**
 * payment_method_param
 *
 * Stripe users in New Zealand can accept Bulk Electronic Clearing System (BECS) direct debit payments from customers with a New Zeland bank account. Check this [page](https://docs.stripe.com/payments/nz-bank-account) for more details.
 */
final class BankAccountRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\PaymentMethodConfigurations\Post\NzBankAccount\DisplayPreferenceRequest $display_preference;
}
