<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Subscriptions\Get\Query;

enum QueryStatusEnum: string
{
    case Active = 'active';
    case All = 'all';
    case Canceled = 'canceled';
    case Ended = 'ended';
    case Incomplete = 'incomplete';
    case IncompleteExpired = 'incomplete_expired';
    case PastDue = 'past_due';
    case Paused = 'paused';
    case Trialing = 'trialing';
    case Unpaid = 'unpaid';
}
