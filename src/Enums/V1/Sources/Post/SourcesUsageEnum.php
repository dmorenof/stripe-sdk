<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Sources\Post;

enum SourcesUsageEnum: string
{
    case Reusable = 'reusable';
    case SingleUse = 'single_use';
}
