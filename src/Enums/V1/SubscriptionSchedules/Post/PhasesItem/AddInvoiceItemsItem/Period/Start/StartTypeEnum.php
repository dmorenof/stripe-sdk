<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\SubscriptionSchedules\Post\PhasesItem\AddInvoiceItemsItem\Period\Start;

enum StartTypeEnum: string
{
    case MaxItemPeriodStart = 'max_item_period_start';
    case PhaseStart = 'phase_start';
    case Timestamp = 'timestamp';
}
