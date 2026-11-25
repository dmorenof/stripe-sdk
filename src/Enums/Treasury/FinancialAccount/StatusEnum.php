<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Treasury\FinancialAccount;

enum StatusEnum: string
{
    case Closed = 'closed';
    case Open = 'open';
}
