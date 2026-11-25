<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentMethodConfigurations\ByConfiguration\Post;

/**
 * payment_method_param
 *
 * PromptPay is a Thailand-based payment method that allows customers to make a payment using their preferred app from participating banks. Check this [page](https://docs.stripe.com/payments/promptpay) for more details.
 */
final class ByConfigurationPromptpayRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\PaymentMethodConfigurations\ByConfiguration\Post\Promptpay\DisplayPreferenceRequest $display_preference;
}
