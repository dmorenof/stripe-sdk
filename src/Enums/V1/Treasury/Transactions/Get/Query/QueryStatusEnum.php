<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Treasury\Transactions\Get\Query;

enum QueryStatusEnum: string
{
    case Open = 'open';
    case Posted = 'posted';
    case Void_ = 'void';
}
