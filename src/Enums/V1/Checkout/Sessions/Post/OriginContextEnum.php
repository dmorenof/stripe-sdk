<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Checkout\Sessions\Post;

enum OriginContextEnum: string
{
    case MobileApp = 'mobile_app';
    case Web = 'web';
}
