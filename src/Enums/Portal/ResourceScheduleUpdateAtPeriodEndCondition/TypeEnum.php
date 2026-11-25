<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Portal\ResourceScheduleUpdateAtPeriodEndCondition;

enum TypeEnum: string
{
    case DecreasingItemAmount = 'decreasing_item_amount';
    case ShorteningInterval = 'shortening_interval';
}
