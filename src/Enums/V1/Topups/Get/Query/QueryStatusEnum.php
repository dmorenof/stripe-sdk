<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Topups\Get\Query;

enum QueryStatusEnum: string
{
    case Canceled = 'canceled';
    case Failed = 'failed';
    case Pending = 'pending';
    case Succeeded = 'succeeded';
}
