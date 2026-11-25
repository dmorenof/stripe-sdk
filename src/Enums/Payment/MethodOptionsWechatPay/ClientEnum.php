<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Payment\MethodOptionsWechatPay;

enum ClientEnum: string
{
    case Android = 'android';
    case Ios = 'ios';
    case Web = 'web';
}
