<?php

declare(strict_types=1);

namespace StripeSDK\Enums\BankAccountRequestVariant1;

enum HolderTypeEnum: string
{
    case Company = 'company';
    case Individual = 'individual';
}
