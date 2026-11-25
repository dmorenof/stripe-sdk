<?php

declare(strict_types=1);

namespace StripeSDK\Enums\FinancialConnections\Transaction;

enum StatusEnum: string
{
    case Pending = 'pending';
    case Posted = 'posted';
    case Void_ = 'void';
}
