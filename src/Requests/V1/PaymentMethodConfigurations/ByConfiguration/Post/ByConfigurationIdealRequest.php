<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentMethodConfigurations\ByConfiguration\Post;

/**
 * payment_method_param
 *
 * iDEAL is a Netherlands-based payment method that allows customers to complete transactions online using their bank credentials. All major Dutch banks are members of Currence, the scheme that operates iDEAL, making it the most popular online payment method in the Netherlands with a share of online transactions close to 55%. Check this [page](https://docs.stripe.com/payments/ideal) for more details.
 */
final class ByConfigurationIdealRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\PaymentMethodConfigurations\ByConfiguration\Post\Ideal\DisplayPreferenceRequest $display_preference;
}
