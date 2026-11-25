<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Subscriptions\Post\BillingSchedulesItem\BillUntil;

enum UntilTypeEnum: string
{
    case Duration = 'duration';
    case Timestamp = 'timestamp';
}
