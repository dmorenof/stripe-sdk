<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Subscriptions\Post\AddInvoiceItemsItem\Period\End;

enum EndTypeEnum: string
{
    case MinItemPeriodEnd = 'min_item_period_end';
    case Timestamp = 'timestamp';
}
