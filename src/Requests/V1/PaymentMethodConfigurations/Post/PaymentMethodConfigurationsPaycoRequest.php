<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentMethodConfigurations\Post;

/**
 * payment_method_param
 *
 * PAYCO is a [single-use](https://docs.stripe.com/payments/payment-methods#usage local wallet available in South Korea.
 */
final class PaymentMethodConfigurationsPaycoRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\PaymentMethodConfigurations\Post\Payco\DisplayPreferenceRequest $display_preference;
}
