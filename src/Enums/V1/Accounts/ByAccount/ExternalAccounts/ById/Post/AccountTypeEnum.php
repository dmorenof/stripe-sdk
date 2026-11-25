<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Accounts\ByAccount\ExternalAccounts\ById\Post;

enum AccountTypeEnum: string
{
    case Checking = 'checking';
    case Futsu = 'futsu';
    case Savings = 'savings';
    case Toza = 'toza';
}
