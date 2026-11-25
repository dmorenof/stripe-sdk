<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\BillingPortal\Configurations\Post\Features\SubscriptionUpdate\ScheduleAtPeriodEnd\ConditionsItem;

enum ConditionsItemTypeEnum: string
{
    case DecreasingItemAmount = 'decreasing_item_amount';
    case ShorteningInterval = 'shortening_interval';
}
