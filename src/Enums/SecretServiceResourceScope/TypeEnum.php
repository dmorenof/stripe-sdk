<?php

declare(strict_types=1);

namespace StripeSDK\Enums\SecretServiceResourceScope;

enum TypeEnum: string
{
    case Account = 'account';
    case User = 'user';
}
