<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\TestHelpers\Issuing\Transactions\CreateUnlinkedRefund\Post\PurchaseDetails\Fuel;

enum FuelTypeEnum: string
{
    case Diesel = 'diesel';
    case Other = 'other';
    case UnleadedPlus = 'unleaded_plus';
    case UnleadedRegular = 'unleaded_regular';
    case UnleadedSuper = 'unleaded_super';
}
