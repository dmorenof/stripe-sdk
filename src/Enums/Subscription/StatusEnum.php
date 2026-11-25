<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Subscription;

enum StatusEnum: string
{
    case Active = 'active';
    case Canceled = 'canceled';
    case Incomplete = 'incomplete';
    case IncompleteExpired = 'incomplete_expired';
    case PastDue = 'past_due';
    case Paused = 'paused';
    case Trialing = 'trialing';
    case Unpaid = 'unpaid';
}
