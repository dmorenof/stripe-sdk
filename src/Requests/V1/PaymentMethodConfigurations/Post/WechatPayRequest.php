<?php

declare(strict_types=1);

namespace StripeSDK\Requests\V1\PaymentMethodConfigurations\Post;

/**
 * payment_method_param
 *
 * WeChat, owned by Tencent, is China's leading mobile app with over 1 billion monthly active users. Chinese consumers can use WeChat Pay to pay for goods and services inside of businesses' apps and websites. WeChat Pay users buy most frequently in gaming, e-commerce, travel, online education, and food/nutrition. Check this [page](https://docs.stripe.com/payments/wechat-pay) for more details.
 */
final class WechatPayRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\V1\PaymentMethodConfigurations\Post\WechatPay\DisplayPreferenceRequest $display_preference;
}
