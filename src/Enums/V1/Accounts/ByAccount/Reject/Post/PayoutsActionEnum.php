<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Accounts\ByAccount\Reject\Post;

enum PayoutsActionEnum: string
{
    case None = 'none';
    case Pause = 'pause';
}
