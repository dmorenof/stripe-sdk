<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Plans\Post;

enum TiersModeEnum: string
{
    case Graduated = 'graduated';
    case Volume = 'volume';
}
