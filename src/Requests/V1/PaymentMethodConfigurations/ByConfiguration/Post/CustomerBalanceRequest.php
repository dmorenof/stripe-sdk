<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentMethodConfigurations\ByConfiguration\Post;

/**
 * payment_method_param
 *
 * Uses a customer’s [cash balance](https://docs.stripe.com/payments/customer-balance) for the payment. The cash balance can be funded via a bank transfer. Check this [page](https://docs.stripe.com/payments/bank-transfers) for more details.
 */
final class CustomerBalanceRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\PaymentMethodConfigurations\ByConfiguration\Post\CustomerBalance\DisplayPreferenceRequest $display_preference;
}
