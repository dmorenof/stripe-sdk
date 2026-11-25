<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentMethodConfigurations\Post;

/**
 * payment_method_param
 *
 * PayNow is a Singapore-based payment method that allows customers to make a payment using their preferred app from participating banks and participating non-bank financial institutions. Check this [page](https://docs.stripe.com/payments/paynow) for more details.
 */
final class PaymentMethodConfigurationsPaynowRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\PaymentMethodConfigurations\Post\Paynow\DisplayPreferenceRequest $display_preference;
}
