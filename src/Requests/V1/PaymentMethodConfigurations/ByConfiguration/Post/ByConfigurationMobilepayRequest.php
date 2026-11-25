<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentMethodConfigurations\ByConfiguration\Post;

/**
 * payment_method_param
 *
 * MobilePay is a [single-use](https://docs.stripe.com/payments/payment-methods#usage) card wallet payment method used in Denmark and Finland. It allows customers to [authenticate and approve](https://docs.stripe.com/payments/payment-methods#customer-actions) payments using the MobilePay app. Check this [page](https://docs.stripe.com/payments/mobilepay) for more details.
 */
final class ByConfigurationMobilepayRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\PaymentMethodConfigurations\ByConfiguration\Post\Mobilepay\DisplayPreferenceRequest $display_preference;
}
