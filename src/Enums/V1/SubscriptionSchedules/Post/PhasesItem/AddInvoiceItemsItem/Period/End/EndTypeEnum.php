<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\SubscriptionSchedules\Post\PhasesItem\AddInvoiceItemsItem\Period\End;

enum EndTypeEnum: string
{
    case MinItemPeriodEnd = 'min_item_period_end';
    case PhaseEnd = 'phase_end';
    case Timestamp = 'timestamp';
}
