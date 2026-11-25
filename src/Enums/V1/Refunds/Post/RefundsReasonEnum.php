<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Refunds\Post;

enum RefundsReasonEnum: string
{
    case Duplicate = 'duplicate';
    case Fraudulent = 'fraudulent';
    case RequestedByCustomer = 'requested_by_customer';
}
