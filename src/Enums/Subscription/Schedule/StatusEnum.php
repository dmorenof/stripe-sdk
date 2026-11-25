<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Subscription\Schedule;

enum StatusEnum: string
{
    case Active = 'active';
    case Canceled = 'canceled';
    case Completed = 'completed';
    case NotStarted = 'not_started';
    case Released = 'released';
}
