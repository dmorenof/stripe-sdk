<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentMethodConfigurations\Post;

/**
 * payment_method_param
 *
 * Cash App is a popular consumer app in the US that allows customers to bank, invest, send, and receive money using their digital wallet. Check this [page](https://docs.stripe.com/payments/cash-app-pay) for more details.
 */
final class PaymentMethodConfigurationsCashappRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\PaymentMethodConfigurations\Post\Cashapp\DisplayPreferenceRequest $display_preference;
}
