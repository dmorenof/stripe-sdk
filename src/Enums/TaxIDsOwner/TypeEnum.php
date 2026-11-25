<?php

declare(strict_types=1);

namespace StripeSDK\Enums\TaxIDsOwner;

enum TypeEnum: string
{
    case Account = 'account';
    case Application = 'application';
    case Customer = 'customer';
    case Self_ = 'self';
}
