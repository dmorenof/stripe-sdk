<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Issuing\PhysicalBundles\Get\Query;

enum QueryTypeEnum: string
{
    case Custom = 'custom';
    case Standard = 'standard';
}
