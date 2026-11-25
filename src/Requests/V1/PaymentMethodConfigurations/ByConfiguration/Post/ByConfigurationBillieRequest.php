<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentMethodConfigurations\ByConfiguration\Post;

/**
 * payment_method_param
 *
 * Billie is a [single-use](https://docs.stripe.com/payments/payment-methods#usage) payment method that offers businesses Pay by Invoice where they offer payment terms ranging from 7-120 days. Customers are redirected from your website or app, authorize the payment with Billie, then return to your website or app. You get [immediate notification](/payments/payment-methods#payment-notification) of whether the payment succeeded or failed.
 */
final class ByConfigurationBillieRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\PaymentMethodConfigurations\ByConfiguration\Post\Billie\DisplayPreferenceRequest $display_preference;
}
