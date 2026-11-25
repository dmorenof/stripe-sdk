<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentMethodConfigurations\Post;

/**
 * payment_method_param
 *
 * BLIK is a [single use](https://docs.stripe.com/payments/payment-methods#usage) payment method that requires customers to authenticate their payments. When customers want to pay online using BLIK, they request a six-digit code from their banking application and enter it into the payment collection form. Check this [page](https://docs.stripe.com/payments/blik) for more details.
 */
final class PaymentMethodConfigurationsBlikRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\PaymentMethodConfigurations\Post\Blik\DisplayPreferenceRequest $display_preference;
}
