<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\PaymentIntents\ByIntent\Cancel\Post;

enum CancellationReasonEnum: string
{
    case Abandoned = 'abandoned';
    case Duplicate = 'duplicate';
    case Fraudulent = 'fraudulent';
    case RequestedByCustomer = 'requested_by_customer';
}
