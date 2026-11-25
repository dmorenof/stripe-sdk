<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Tokens\Post\BankAccount;

enum HolderTypeEnum: string
{
    case Company = 'company';
    case Individual = 'individual';
}
