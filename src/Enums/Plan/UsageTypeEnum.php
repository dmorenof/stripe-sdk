<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Plan;

enum UsageTypeEnum: string
{
    case Licensed = 'licensed';
    case Metered = 'metered';
}
