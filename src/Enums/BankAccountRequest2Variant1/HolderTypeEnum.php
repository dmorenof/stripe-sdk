<?php

declare(strict_types=1);

namespace StripeSDK\Enums\BankAccountRequest2Variant1;

enum HolderTypeEnum: string
{
    case Company = 'company';
    case Individual = 'individual';
}
