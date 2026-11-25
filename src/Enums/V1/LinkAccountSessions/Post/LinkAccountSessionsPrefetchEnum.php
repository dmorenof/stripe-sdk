<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\LinkAccountSessions\Post;

enum LinkAccountSessionsPrefetchEnum: string
{
    case Balances = 'balances';
    case Ownership = 'ownership';
    case Transactions = 'transactions';
}
