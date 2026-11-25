<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentMethodConfigurations\Post;

/**
 * payment_method_param
 *
 * Samsung Pay is a [single-use](https://docs.stripe.com/payments/payment-methods#usage local wallet available in South Korea.
 */
final class SamsungPayRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\PaymentMethodConfigurations\Post\SamsungPay\DisplayPreferenceRequest $display_preference;
}
