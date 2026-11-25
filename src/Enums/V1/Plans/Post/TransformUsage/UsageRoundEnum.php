<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Plans\Post\TransformUsage;

enum UsageRoundEnum: string
{
    case Down = 'down';
    case Up = 'up';
}
