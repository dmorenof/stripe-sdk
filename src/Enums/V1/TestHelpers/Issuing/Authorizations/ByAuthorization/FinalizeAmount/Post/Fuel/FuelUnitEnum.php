<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\TestHelpers\Issuing\Authorizations\ByAuthorization\FinalizeAmount\Post\Fuel;

enum FuelUnitEnum: string
{
    case ChargingMinute = 'charging_minute';
    case ImperialGallon = 'imperial_gallon';
    case Kilogram = 'kilogram';
    case KilowattHour = 'kilowatt_hour';
    case Liter = 'liter';
    case Other = 'other';
    case Pound = 'pound';
    case UsGallon = 'us_gallon';
}
