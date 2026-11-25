<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Subscription\Schedule;

enum EndBehaviorEnum: string
{
    case Cancel = 'cancel';
    case None = 'none';
    case Release = 'release';
    case Renew = 'renew';
}
