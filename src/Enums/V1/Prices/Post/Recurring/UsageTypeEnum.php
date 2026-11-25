<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Prices\Post\Recurring;

enum UsageTypeEnum: string
{
    case Licensed = 'licensed';
    case Metered = 'metered';
}
