<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentMethodConfigurations\Post;

/**
 * payment_method_param
 *
 * Alipay is a digital wallet in China that has more than a billion active users worldwide. Alipay users can pay on the web or on a mobile device using login credentials or their Alipay app. Alipay has a low dispute rate and reduces fraud by authenticating payments using the customer's login credentials. Check this [page](https://docs.stripe.com/payments/alipay) for more details.
 */
final class PaymentMethodConfigurationsAlipayRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\PaymentMethodConfigurations\Post\Alipay\DisplayPreferenceRequest $display_preference;
}
