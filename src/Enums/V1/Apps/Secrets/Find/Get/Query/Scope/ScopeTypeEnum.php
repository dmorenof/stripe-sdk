<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Apps\Secrets\Find\Get\Query\Scope;

enum ScopeTypeEnum: string
{
    case Account = 'account';
    case User = 'user';
}
