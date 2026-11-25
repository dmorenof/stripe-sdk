<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentMethodConfigurations\Post;

/**
 * payment_method_param
 *
 * MB WAY is the most popular wallet in Portugal. After entering their phone number in your checkout, customers approve the payment directly in their MB WAY app. Check this [page](https://docs.stripe.com/payments/mb-way) for more details.
 */
final class MbWayRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\PaymentMethodConfigurations\Post\MbWay\DisplayPreferenceRequest $display_preference;
}
