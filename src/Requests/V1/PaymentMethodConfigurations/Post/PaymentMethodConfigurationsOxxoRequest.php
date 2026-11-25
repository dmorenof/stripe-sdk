<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentMethodConfigurations\Post;

/**
 * payment_method_param
 *
 * OXXO is a Mexican chain of convenience stores with thousands of locations across Latin America and represents nearly 20% of online transactions in Mexico. OXXO allows customers to pay bills and online purchases in-store with cash. Check this [page](https://docs.stripe.com/payments/oxxo) for more details.
 */
final class PaymentMethodConfigurationsOxxoRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\PaymentMethodConfigurations\Post\Oxxo\DisplayPreferenceRequest $display_preference;
}
