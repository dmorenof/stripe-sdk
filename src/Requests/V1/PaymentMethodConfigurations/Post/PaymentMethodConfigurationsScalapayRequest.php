<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentMethodConfigurations\Post;

/**
 * payment_method_param
 *
 * Scalapay is a [single-use](/payments/payment-methods#usage) payment method that lets customers pay in 3 or 4 installments. Customers are redirected from your website or app, authorize the payment with Scalapay, then return to your website or app. You get [immediate notification](/payments/payment-methods#payment-notification) of whether the payment succeeded or failed.
 */
final class PaymentMethodConfigurationsScalapayRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\PaymentMethodConfigurations\Post\Scalapay\DisplayPreferenceRequest $display_preference;
}
