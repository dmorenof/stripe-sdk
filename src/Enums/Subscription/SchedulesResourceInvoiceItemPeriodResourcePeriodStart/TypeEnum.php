<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Subscription\SchedulesResourceInvoiceItemPeriodResourcePeriodStart;

enum TypeEnum: string
{
    case MaxItemPeriodStart = 'max_item_period_start';
    case PhaseStart = 'phase_start';
    case Timestamp = 'timestamp';
}
