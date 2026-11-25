<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Topup;

enum StatusEnum: string
{
    case Canceled = 'canceled';
    case Failed = 'failed';
    case Pending = 'pending';
    case Reversed = 'reversed';
    case Succeeded = 'succeeded';
}
