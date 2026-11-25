<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Checkout\Session;

enum OriginContextEnum: string
{
    case MobileApp = 'mobile_app';
    case Web = 'web';
}
