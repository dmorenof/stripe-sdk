<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentMethodConfigurations\Post;

/**
 * payment_method_param
 *
 * Naver Pay is a popular local wallet available in South Korea.
 */
final class NaverPayRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\PaymentMethodConfigurations\Post\NaverPay\DisplayPreferenceRequest $display_preference;
}
