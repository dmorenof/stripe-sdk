<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Checkout\Sessions\Post\BrandingSettings\Icon;

enum IconTypeEnum: string
{
    case File = 'file';
    case Url = 'url';
}
