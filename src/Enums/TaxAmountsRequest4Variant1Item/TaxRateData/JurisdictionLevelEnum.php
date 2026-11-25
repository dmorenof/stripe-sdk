<?php

declare(strict_types=1);

namespace StripeSDK\Enums\TaxAmountsRequest4Variant1Item\TaxRateData;

enum JurisdictionLevelEnum: string
{
    case City = 'city';
    case Country = 'country';
    case County = 'county';
    case District = 'district';
    case Multiple = 'multiple';
    case State = 'state';
}
