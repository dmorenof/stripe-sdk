<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentMethodConfigurations\ByConfiguration\Post;

/**
 * payment_method_param
 *
 * PayPal, a digital wallet popular with customers in Europe, allows your customers worldwide to pay using their PayPal account. Check this [page](https://docs.stripe.com/payments/paypal) for more details.
 */
final class ByConfigurationPaypalRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\PaymentMethodConfigurations\ByConfiguration\Post\Paypal\DisplayPreferenceRequest $display_preference;
}
