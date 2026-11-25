<?php

declare(strict_types=1);

namespace StripeSDK\Enums\WechatPayRequestVariant1;

enum WechatPayRequestVariant1ClientEnum: string
{
    case Android = 'android';
    case Ios = 'ios';
    case Web = 'web';
}
