<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Sources\Post\Mandate;

enum MandateIntervalEnum: string
{
    case OneTime = 'one_time';
    case Scheduled = 'scheduled';
    case Variable = 'variable';
}
