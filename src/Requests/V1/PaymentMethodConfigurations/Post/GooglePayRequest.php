<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentMethodConfigurations\Post;

/**
 * payment_method_param
 *
 * Google Pay allows customers to make payments in your app or website using any credit or debit card saved to their Google Account, including those from Google Play, YouTube, Chrome, or an Android device. Use the Google Pay API to request any credit or debit card stored in your customer's Google account. Check this [page](https://docs.stripe.com/google-pay) for more details.
 */
final class GooglePayRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\PaymentMethodConfigurations\Post\GooglePay\DisplayPreferenceRequest $display_preference;
}
