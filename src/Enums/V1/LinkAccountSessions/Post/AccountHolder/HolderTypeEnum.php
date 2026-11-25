<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\LinkAccountSessions\Post\AccountHolder;

enum HolderTypeEnum: string
{
    case Account = 'account';
    case Customer = 'customer';
}
