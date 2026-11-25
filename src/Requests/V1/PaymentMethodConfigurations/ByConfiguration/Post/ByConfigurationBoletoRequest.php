<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentMethodConfigurations\ByConfiguration\Post;

/**
 * payment_method_param
 *
 * Boleto is an official (regulated by the Central Bank of Brazil) payment method in Brazil. Check this [page](https://docs.stripe.com/payments/boleto) for more details.
 */
final class ByConfigurationBoletoRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\PaymentMethodConfigurations\ByConfiguration\Post\Boleto\DisplayPreferenceRequest $display_preference;
}
