<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\TestHelpers\Issuing\Authorizations\Post\Fleet;

enum ServiceTypeEnum: string
{
    case FullService = 'full_service';
    case NonFuelTransaction = 'non_fuel_transaction';
    case SelfService = 'self_service';
}
