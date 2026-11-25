<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Plan;

enum TiersModeEnum: string
{
    case Graduated = 'graduated';
    case Volume = 'volume';
}
