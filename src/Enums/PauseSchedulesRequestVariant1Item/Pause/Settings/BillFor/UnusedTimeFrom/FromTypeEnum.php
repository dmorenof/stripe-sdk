<?php

declare(strict_types=1);

namespace StripeSDK\Enums\PauseSchedulesRequestVariant1Item\Pause\Settings\BillFor\UnusedTimeFrom;

enum FromTypeEnum: string
{
    case ItemCurrentPeriodStart = 'item_current_period_start';
    case None = 'none';
    case PauseAt = 'pause_at';
}
