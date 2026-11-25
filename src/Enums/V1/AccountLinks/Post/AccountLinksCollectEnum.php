<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\AccountLinks\Post;

enum AccountLinksCollectEnum: string
{
    case CurrentlyDue = 'currently_due';
    case EventuallyDue = 'eventually_due';
}
