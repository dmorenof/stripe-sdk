<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentMethodConfigurations\ByConfiguration\Post;

/**
 * payment_method_param
 *
 * EPS is an Austria-based payment method that allows customers to complete transactions online using their bank credentials. EPS is supported by all Austrian banks and is accepted by over 80% of Austrian online retailers. Check this [page](https://docs.stripe.com/payments/eps) for more details.
 */
final class ByConfigurationEpsRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\PaymentMethodConfigurations\ByConfiguration\Post\Eps\DisplayPreferenceRequest $display_preference;
}
