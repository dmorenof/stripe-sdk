<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Checkout\Sessions\Post\PaymentMethodOptions\WechatPay;

enum PayClientEnum: string
{
    case Android = 'android';
    case Ios = 'ios';
    case Web = 'web';
}
