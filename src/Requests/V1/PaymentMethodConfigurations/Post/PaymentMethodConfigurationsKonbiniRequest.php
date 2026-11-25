<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentMethodConfigurations\Post;

/**
 * payment_method_param
 *
 * Konbini allows customers in Japan to pay for bills and online purchases at convenience stores with cash. Check this [page](https://docs.stripe.com/payments/konbini) for more details.
 */
final class PaymentMethodConfigurationsKonbiniRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\PaymentMethodConfigurations\Post\Konbini\DisplayPreferenceRequest $display_preference;
}
