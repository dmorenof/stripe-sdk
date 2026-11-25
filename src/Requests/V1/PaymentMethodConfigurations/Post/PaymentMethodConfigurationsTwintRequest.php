<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentMethodConfigurations\Post;

/**
 * payment_method_param
 *
 * Twint is a payment method popular in Switzerland. It allows customers to pay using their mobile phone. Check this [page](https://docs.stripe.com/payments/twint) for more details.
 */
final class PaymentMethodConfigurationsTwintRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\PaymentMethodConfigurations\Post\Twint\DisplayPreferenceRequest $display_preference;
}
