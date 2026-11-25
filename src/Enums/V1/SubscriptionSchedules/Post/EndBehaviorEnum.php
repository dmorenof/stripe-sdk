<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\SubscriptionSchedules\Post;

enum EndBehaviorEnum: string
{
    case Cancel = 'cancel';
    case None = 'none';
    case Release = 'release';
    case Renew = 'renew';
}
