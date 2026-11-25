<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentMethodConfigurations\Post;

/**
 * payment_method_param
 *
 * Stripe users in Europe and the United States can use the [Payment Intents API](https://stripe.com/docs/payments/payment-intents)—a single integration path for creating payments using any supported method—to accept [Sofort](https://www.sofort.com/) payments from customers. Check this [page](https://docs.stripe.com/payments/sofort) for more details.
 */
final class PaymentMethodConfigurationsSofortRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\PaymentMethodConfigurations\Post\Sofort\DisplayPreferenceRequest $display_preference;
}
