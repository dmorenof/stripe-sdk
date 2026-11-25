<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Subscription\SchedulesResourceInvoiceItemPeriodResourcePeriodEnd;

enum TypeEnum: string
{
    case MinItemPeriodEnd = 'min_item_period_end';
    case PhaseEnd = 'phase_end';
    case Timestamp = 'timestamp';
}
