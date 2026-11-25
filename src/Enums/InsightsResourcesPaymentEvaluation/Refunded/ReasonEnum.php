<?php

declare(strict_types=1);

namespace StripeSDK\Enums\InsightsResourcesPaymentEvaluation\Refunded;

enum ReasonEnum: string
{
    case Duplicate = 'duplicate';
    case Fraudulent = 'fraudulent';
    case Other = 'other';
    case RequestedByCustomer = 'requested_by_customer';
}
