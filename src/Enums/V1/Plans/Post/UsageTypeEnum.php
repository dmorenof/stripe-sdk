<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Plans\Post;

enum UsageTypeEnum: string
{
    case Licensed = 'licensed';
    case Metered = 'metered';
}
