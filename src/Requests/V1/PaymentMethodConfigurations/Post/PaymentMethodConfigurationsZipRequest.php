<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentMethodConfigurations\Post;

/**
 * payment_method_param
 *
 * Zip gives your customers a way to split purchases over a series of payments. Check this [page](https://docs.stripe.com/payments/zip) for more details like country availability.
 */
final class PaymentMethodConfigurationsZipRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\PaymentMethodConfigurations\Post\Zip\DisplayPreferenceRequest $display_preference;
}
