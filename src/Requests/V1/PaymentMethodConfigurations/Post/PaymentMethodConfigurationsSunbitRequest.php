<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentMethodConfigurations\Post;

/**
 * payment_method_param
 *
 * Sunbit is a [single-use](https://docs.stripe.com/payments/payment-methods#usage) payment method where customers choose to pay in 3, 6, or 12 installments. Customers are redirected from your website or app, authorize the payment with Sunbit, then return to your website or app. You get [immediate notification](https://docs.stripe.com/payments/payment-methods#payment-notification) of whether the payment succeeded or failed.
 */
final class PaymentMethodConfigurationsSunbitRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\PaymentMethodConfigurations\Post\Sunbit\DisplayPreferenceRequest $display_preference;
}
