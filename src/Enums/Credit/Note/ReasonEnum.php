<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Credit\Note;

enum ReasonEnum: string
{
    case Duplicate = 'duplicate';
    case Fraudulent = 'fraudulent';
    case OrderChange = 'order_change';
    case ProductUnsatisfactory = 'product_unsatisfactory';
}
