<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Tax\Registrations\Post\CountryOptions\Ca;

enum CaTypeEnum: string
{
    case ProvinceStandard = 'province_standard';
    case Simplified = 'simplified';
    case Standard = 'standard';
}
