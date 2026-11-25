<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Treasury\InboundTransfers\Get\Query;

enum QueryStatusEnum: string
{
    case Canceled = 'canceled';
    case Failed = 'failed';
    case Processing = 'processing';
    case Succeeded = 'succeeded';
}
