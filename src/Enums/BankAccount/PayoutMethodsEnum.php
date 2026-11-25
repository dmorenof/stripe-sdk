<?php

declare(strict_types=1);

namespace StripeSDK\Enums\BankAccount;

enum PayoutMethodsEnum: string
{
    case Instant = 'instant';
    case Standard = 'standard';
}
