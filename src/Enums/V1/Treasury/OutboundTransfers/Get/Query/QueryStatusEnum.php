<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Treasury\OutboundTransfers\Get\Query;

enum QueryStatusEnum: string
{
    case Canceled = 'canceled';
    case Failed = 'failed';
    case Posted = 'posted';
    case Processing = 'processing';
    case Returned = 'returned';
}
