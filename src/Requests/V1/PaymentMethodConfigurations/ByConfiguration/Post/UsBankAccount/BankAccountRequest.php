<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentMethodConfigurations\ByConfiguration\Post\UsBankAccount;

/**
 * payment_method_param
 *
 * Stripe users in the United States can accept ACH direct debit payments from customers with a US bank account using the Automated Clearing House (ACH) payments system operated by Nacha. Check this [page](https://docs.stripe.com/payments/ach-direct-debit) for more details.
 */
final class BankAccountRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\PaymentMethodConfigurations\ByConfiguration\Post\UsBankAccount\DisplayPreferenceRequest $display_preference;
}
