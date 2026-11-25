<?php

declare(strict_types=1);

namespace StripeSDK\Enums\BankConnectionsResource\Balance;

enum TypeEnum: string
{
    case Cash = 'cash';
    case Credit = 'credit';
}
