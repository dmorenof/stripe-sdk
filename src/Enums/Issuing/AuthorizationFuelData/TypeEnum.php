<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Issuing\AuthorizationFuelData;

enum TypeEnum: string
{
    case Diesel = 'diesel';
    case Other = 'other';
    case UnleadedPlus = 'unleaded_plus';
    case UnleadedRegular = 'unleaded_regular';
    case UnleadedSuper = 'unleaded_super';
}
