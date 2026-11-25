<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Issuing\AuthorizationFleetData;

enum ServiceTypeEnum: string
{
    case FullService = 'full_service';
    case NonFuelTransaction = 'non_fuel_transaction';
    case SelfService = 'self_service';
}
