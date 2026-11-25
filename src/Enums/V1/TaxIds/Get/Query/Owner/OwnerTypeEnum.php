<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\TaxIds\Get\Query\Owner;

enum OwnerTypeEnum: string
{
    case Account = 'account';
    case Application = 'application';
    case Customer = 'customer';
    case Self_ = 'self';
}
