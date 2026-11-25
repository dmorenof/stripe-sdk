<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentMethodConfigurations\Post;

/**
 * payment_method_param
 *
 * Satispay is a [single-use](/payments/payment-methods#usage) payment method where customers are required to [authenticate](/payments/payment-methods#customer-actions) their payment. Customers pay by being redirected from your website or app, authorizing the payment with Satispay, then returning to your website or app. You get [immediate notification](/payments/payment-methods#payment-notification) of whether the payment succeeded or failed.
 */
final class PaymentMethodConfigurationsSatispayRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\PaymentMethodConfigurations\Post\Satispay\DisplayPreferenceRequest $display_preference;
}
