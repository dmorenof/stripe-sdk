<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Issuing\AuthorizationFleetData;

enum PurchaseTypeEnum: string
{
    case FuelAndNonFuelPurchase = 'fuel_and_non_fuel_purchase';
    case FuelPurchase = 'fuel_purchase';
    case NonFuelPurchase = 'non_fuel_purchase';
}
