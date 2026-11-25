<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Refund;

enum ReasonEnum: string
{
    case Duplicate = 'duplicate';
    case ExpiredUncapturedCharge = 'expired_uncaptured_charge';
    case Fraudulent = 'fraudulent';
    case RequestedByCustomer = 'requested_by_customer';
}
