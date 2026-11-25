<?php

declare(strict_types=1);

namespace StripeSDK\Enums\BankAccountRequest2Variant1;

enum AccountTypeEnum: string
{
    case Checking = 'checking';
    case Futsu = 'futsu';
    case Savings = 'savings';
    case Toza = 'toza';
}
