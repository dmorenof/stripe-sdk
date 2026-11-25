<?php

declare(strict_types=1);

namespace StripeSDK\Enums\BillingSchedulesRequest2Variant1Item\BillUntil;

enum UntilTypeEnum: string
{
    case Duration = 'duration';
    case Timestamp = 'timestamp';
}
