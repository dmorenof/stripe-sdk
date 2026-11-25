<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentMethodConfigurations\ByConfiguration\Post;

/**
 * payment_method_param
 *
 * PayTo is a [real-time](https://docs.stripe.com/payments/real-time) payment method that enables customers in Australia to pay by providing their bank account details. Customers must accept a mandate authorizing you to debit their account. Check this [page](https://docs.stripe.com/payments/payto) for more details.
 */
final class ByConfigurationPaytoRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\PaymentMethodConfigurations\ByConfiguration\Post\Payto\DisplayPreferenceRequest $display_preference;
}
