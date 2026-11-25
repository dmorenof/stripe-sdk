<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentMethodConfigurations\ByConfiguration\Post;

/**
 * payment_method_param
 *
 * Stripe users can accept [Apple Pay](https://stripe.com/payments/apple-pay) in iOS applications in iOS 9 and later, and on the web in Safari starting with iOS 10 or macOS Sierra. There are no additional fees to process Apple Pay payments, and the [pricing](https://stripe.com/pricing) is the same as other card transactions. Check this [page](https://docs.stripe.com/apple-pay) for more details.
 */
final class ApplePayRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\PaymentMethodConfigurations\ByConfiguration\Post\ApplePay\DisplayPreferenceRequest $display_preference;
}
