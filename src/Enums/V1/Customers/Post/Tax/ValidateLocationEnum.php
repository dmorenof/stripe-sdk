<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Customers\Post\Tax;

enum ValidateLocationEnum: string
{
    case Deferred = 'deferred';
    case Immediately = 'immediately';
}
