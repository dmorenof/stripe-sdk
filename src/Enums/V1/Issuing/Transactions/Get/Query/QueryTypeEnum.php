<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Issuing\Transactions\Get\Query;

enum QueryTypeEnum: string
{
    case Capture = 'capture';
    case Refund = 'refund';
}
