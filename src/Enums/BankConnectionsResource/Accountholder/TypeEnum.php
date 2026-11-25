<?php

declare(strict_types=1);

namespace StripeSDK\Enums\BankConnectionsResource\Accountholder;

enum TypeEnum: string
{
    case Account = 'account';
    case Customer = 'customer';
}
