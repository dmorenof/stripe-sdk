<?php

declare(strict_types=1);

namespace StripeSDK\Enums\PauseSchedulesRequestVariant1Item\Pause\Settings\BillFor\OutstandingUsageThrough;

enum ThroughTypeEnum: string
{
    case None = 'none';
    case PauseAt = 'pause_at';
}
