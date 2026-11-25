<?php

declare(strict_types=1);

namespace StripeSDK\Enums\SubscriptionsResource\BillingSchedulesBillUntil;

enum TypeEnum: string
{
    case Duration = 'duration';
    case Timestamp = 'timestamp';
}
