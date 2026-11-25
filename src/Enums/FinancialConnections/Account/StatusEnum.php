<?php

declare(strict_types=1);

namespace StripeSDK\Enums\FinancialConnections\Account;

enum StatusEnum: string
{
    case Active = 'active';
    case Disconnected = 'disconnected';
    case Inactive = 'inactive';
}
