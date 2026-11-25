<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentMethodConfigurations\ByConfiguration\Post;

/**
 * payment_method_param
 *
 * Amazon Pay is a wallet payment method that lets your customers check out the same way as on Amazon.
 */
final class AmazonPayRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\PaymentMethodConfigurations\ByConfiguration\Post\AmazonPay\DisplayPreferenceRequest $display_preference;
}
