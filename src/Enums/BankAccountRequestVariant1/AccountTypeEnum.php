<?php

declare(strict_types=1);

namespace StripeSDK\Enums\BankAccountRequestVariant1;

enum AccountTypeEnum: string
{
    case Checking = 'checking';
    case Futsu = 'futsu';
    case Savings = 'savings';
    case Toza = 'toza';
}
