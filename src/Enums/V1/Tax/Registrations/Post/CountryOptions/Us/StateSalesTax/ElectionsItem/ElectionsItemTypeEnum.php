<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Tax\Registrations\Post\CountryOptions\Us\StateSalesTax\ElectionsItem;

enum ElectionsItemTypeEnum: string
{
    case LocalUseTax = 'local_use_tax';
    case SimplifiedSellersUseTax = 'simplified_sellers_use_tax';
    case SingleLocalUseTax = 'single_local_use_tax';
}
