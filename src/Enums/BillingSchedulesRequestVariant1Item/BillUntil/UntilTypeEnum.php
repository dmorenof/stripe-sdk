<?php

declare(strict_types=1);

namespace StripeSDK\Enums\BillingSchedulesRequestVariant1Item\BillUntil;

enum UntilTypeEnum: string
{
    case Duration = 'duration';
    case Timestamp = 'timestamp';
}
