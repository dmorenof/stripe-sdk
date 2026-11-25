<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Subscriptions\BySubscriptionExposedId\Post\AddInvoiceItemsItem\Period\Start;

enum StartTypeEnum: string
{
    case MaxItemPeriodStart = 'max_item_period_start';
    case Now = 'now';
    case Timestamp = 'timestamp';
}
