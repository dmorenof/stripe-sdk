<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Apps\Secrets\Delete\Post\Scope;

enum ScopeTypeEnum: string
{
    case Account = 'account';
    case User = 'user';
}
