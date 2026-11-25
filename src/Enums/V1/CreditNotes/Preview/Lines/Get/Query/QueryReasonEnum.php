<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\CreditNotes\Preview\Lines\Get\Query;

enum QueryReasonEnum: string
{
    case Duplicate = 'duplicate';
    case Fraudulent = 'fraudulent';
    case OrderChange = 'order_change';
    case ProductUnsatisfactory = 'product_unsatisfactory';
}
