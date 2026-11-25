<?php

declare(strict_types=1);

namespace StripeSDK\Enums\WechatPayRequest2Variant1;

enum WechatPayRequest2Variant1ClientEnum: string
{
    case Android = 'android';
    case Ios = 'ios';
    case Web = 'web';
}
