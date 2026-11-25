<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\LinkedAccounts\ByAccount\Refresh\Post;

enum RefreshFeaturesEnum: string
{
    case Balance = 'balance';
    case Ownership = 'ownership';
    case Transactions = 'transactions';
}
