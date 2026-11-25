<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentMethodConfigurations\Post;

/**
 * payment_method_param
 *
 * Boleto is an official (regulated by the Central Bank of Brazil) payment method in Brazil. Check this [page](https://docs.stripe.com/payments/boleto) for more details.
 */
final class PaymentMethodConfigurationsBoletoRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\PaymentMethodConfigurations\Post\Boleto\DisplayPreferenceRequest $display_preference;
}
