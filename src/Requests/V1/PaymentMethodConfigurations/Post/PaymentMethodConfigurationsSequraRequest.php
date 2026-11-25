<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentMethodConfigurations\Post;

/**
 * payment_method_param
 *
 * SeQura is a [single-use](https://docs.stripe.com/payments/payment-methods#usage) payment method that offers customers payment terms ranging from 7-120 days. Customers are redirected from your website or app, authorize the payment with SeQura, then return to your website or app. You get [immediate notification](https://docs.stripe.com/payments/payment-methods#payment-notification) of whether the payment succeeded or failed.
 */
final class PaymentMethodConfigurationsSequraRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\PaymentMethodConfigurations\Post\Sequra\DisplayPreferenceRequest $display_preference;
}
