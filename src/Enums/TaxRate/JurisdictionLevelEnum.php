<?php

declare(strict_types=1);

namespace StripeSDK\Enums\TaxRate;

enum JurisdictionLevelEnum: string
{
    case City = 'city';
    case Country = 'country';
    case County = 'county';
    case District = 'district';
    case Multiple = 'multiple';
    case State = 'state';
}
