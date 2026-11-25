<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Portal\SubscriptionCancel;

enum ModeEnum: string
{
    case AtPeriodEnd = 'at_period_end';
    case Immediately = 'immediately';
}
