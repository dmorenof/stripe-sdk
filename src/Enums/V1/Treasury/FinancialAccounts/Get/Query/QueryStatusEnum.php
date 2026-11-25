<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Treasury\FinancialAccounts\Get\Query;

enum QueryStatusEnum: string
{
    case Closed = 'closed';
    case Open = 'open';
}
