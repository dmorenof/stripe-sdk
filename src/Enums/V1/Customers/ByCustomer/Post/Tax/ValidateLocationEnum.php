<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Customers\ByCustomer\Post\Tax;

enum ValidateLocationEnum: string
{
    case Auto = 'auto';
    case Deferred = 'deferred';
    case Immediately = 'immediately';
}
