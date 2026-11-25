<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\FinancialConnections\Sessions\Post\AccountHolder;

enum HolderTypeEnum: string
{
    case Account = 'account';
    case Customer = 'customer';
}
