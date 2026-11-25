<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Issuing\Settlement;

enum StatusEnum: string
{
    case Complete = 'complete';
    case Pending = 'pending';
}
