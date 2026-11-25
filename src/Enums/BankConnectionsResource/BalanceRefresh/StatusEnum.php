<?php

declare(strict_types=1);

namespace StripeSDK\Enums\BankConnectionsResource\BalanceRefresh;

enum StatusEnum: string
{
    case Failed = 'failed';
    case Pending = 'pending';
    case Succeeded = 'succeeded';
}
