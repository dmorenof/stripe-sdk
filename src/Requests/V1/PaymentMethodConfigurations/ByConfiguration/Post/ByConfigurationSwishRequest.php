<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentMethodConfigurations\ByConfiguration\Post;

/**
 * payment_method_param
 *
 * Swish is a [real-time](https://docs.stripe.com/payments/real-time) payment method popular in Sweden. It allows customers to [authenticate and approve](https://docs.stripe.com/payments/payment-methods#customer-actions) payments using the Swish mobile app and the Swedish BankID mobile app. Check this [page](https://docs.stripe.com/payments/swish) for more details.
 */
final class ByConfigurationSwishRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\PaymentMethodConfigurations\ByConfiguration\Post\Swish\DisplayPreferenceRequest $display_preference;
}
