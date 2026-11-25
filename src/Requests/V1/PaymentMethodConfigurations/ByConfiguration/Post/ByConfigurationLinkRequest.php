<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentMethodConfigurations\ByConfiguration\Post;

/**
 * payment_method_param
 *
 * [Link](https://docs.stripe.com/payments/link) is a payment method network. With Link, users save their payment details once, then reuse that information to pay with one click for any business on the network.
 */
final class ByConfigurationLinkRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\PaymentMethodConfigurations\ByConfiguration\Post\Link\DisplayPreferenceRequest $display_preference;
}
