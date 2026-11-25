<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentMethodConfigurations\ByConfiguration\Post;

/**
 * payment_method_param
 *
 * Stripe users in Europe and the United States can accept Multibanco payments from customers in Portugal using [Sources](https://stripe.com/docs/sources)—a single integration path for creating payments using any supported method.
 */
final class ByConfigurationMultibancoRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\PaymentMethodConfigurations\ByConfiguration\Post\Multibanco\DisplayPreferenceRequest $display_preference;
}
