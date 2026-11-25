<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Checkout\Sessions\Post\BrandingSettings\Logo;

enum LogoTypeEnum: string
{
    case File = 'file';
    case Url = 'url';
}
