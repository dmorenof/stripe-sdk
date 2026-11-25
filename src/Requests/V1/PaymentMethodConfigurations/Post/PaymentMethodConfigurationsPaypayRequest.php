<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentMethodConfigurations\Post;

/**
 * payment_method_param
 *
 * Customers can pay with PayPay online or using the PayPay app.
 */
final class PaymentMethodConfigurationsPaypayRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\PaymentMethodConfigurations\Post\Paypay\DisplayPreferenceRequest $display_preference;
}
