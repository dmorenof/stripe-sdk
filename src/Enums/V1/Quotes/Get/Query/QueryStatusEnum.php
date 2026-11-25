<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Quotes\Get\Query;

enum QueryStatusEnum: string
{
    case Accepted = 'accepted';
    case Canceled = 'canceled';
    case Draft = 'draft';
    case Open = 'open';
}
