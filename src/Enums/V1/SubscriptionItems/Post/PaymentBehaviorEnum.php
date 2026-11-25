<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\SubscriptionItems\Post;

enum PaymentBehaviorEnum: string
{
    case AllowIncomplete = 'allow_incomplete';
    case DefaultIncomplete = 'default_incomplete';
    case ErrorIfIncomplete = 'error_if_incomplete';
    case PendingIfIncomplete = 'pending_if_incomplete';
}
