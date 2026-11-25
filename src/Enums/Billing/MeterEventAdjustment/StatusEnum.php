<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Billing\MeterEventAdjustment;

enum StatusEnum: string
{
    case Complete = 'complete';
    case Pending = 'pending';
}
