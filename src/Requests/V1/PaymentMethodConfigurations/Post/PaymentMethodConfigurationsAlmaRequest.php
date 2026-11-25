<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentMethodConfigurations\Post;

/**
 * payment_method_param
 *
 * Alma is a Buy Now, Pay Later payment method that offers customers the ability to pay in 2, 3, or 4 installments.
 */
final class PaymentMethodConfigurationsAlmaRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\PaymentMethodConfigurations\Post\Alma\DisplayPreferenceRequest $display_preference;
}
