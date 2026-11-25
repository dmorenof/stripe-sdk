<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Payment\MethodDetailsCardPresentReceipt;

enum AccountTypeEnum: string
{
    case Checking = 'checking';
    case Credit = 'credit';
    case Prepaid = 'prepaid';
    case Unknown = 'unknown';
}
