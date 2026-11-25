<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\CreditNotes\Post;

enum CreditNotesReasonEnum: string
{
    case Duplicate = 'duplicate';
    case Fraudulent = 'fraudulent';
    case OrderChange = 'order_change';
    case ProductUnsatisfactory = 'product_unsatisfactory';
}
