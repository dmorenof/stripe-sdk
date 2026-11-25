<?php

declare(strict_types=1);

namespace StripeSDK\Enums\WechatPayRequest3Variant1;

enum WechatPayRequest3Variant1ClientEnum: string
{
    case Android = 'android';
    case Ios = 'ios';
    case Web = 'web';
}
