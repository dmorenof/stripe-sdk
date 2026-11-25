<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentMethodConfigurations\Post;

/**
 * payment_method_param
 *
 * Cards are a popular way for consumers and businesses to pay online or in person. Stripe supports global and local card networks.
 */
final class PaymentMethodConfigurationsCardRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\PaymentMethodConfigurations\Post\Card\DisplayPreferenceRequest $display_preference;
}
