<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Price;

enum TiersModeEnum: string
{
    case Graduated = 'graduated';
    case Volume = 'volume';
}
