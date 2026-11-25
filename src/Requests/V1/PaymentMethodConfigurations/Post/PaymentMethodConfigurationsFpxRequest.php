<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentMethodConfigurations\Post;

/**
 * payment_method_param
 *
 * Financial Process Exchange (FPX) is a Malaysia-based payment method that allows customers to complete transactions online using their bank credentials. Bank Negara Malaysia (BNM), the Central Bank of Malaysia, and eleven other major Malaysian financial institutions are members of the PayNet Group, which owns and operates FPX. It is one of the most popular online payment methods in Malaysia, with nearly 90 million transactions in 2018 according to BNM. Check this [page](https://docs.stripe.com/payments/fpx) for more details.
 */
final class PaymentMethodConfigurationsFpxRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\PaymentMethodConfigurations\Post\Fpx\DisplayPreferenceRequest $display_preference;
}
