<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Treasury\Transactions\Get\Query;

enum OrderByEnum: string
{
    case Created = 'created';
    case PostedAt = 'posted_at';
}
