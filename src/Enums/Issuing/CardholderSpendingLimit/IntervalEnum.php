<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Issuing\CardholderSpendingLimit;

enum IntervalEnum: string
{
    case AllTime = 'all_time';
    case Daily = 'daily';
    case Monthly = 'monthly';
    case PerAuthorization = 'per_authorization';
    case Weekly = 'weekly';
    case Yearly = 'yearly';
}
