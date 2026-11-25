<?php

declare(strict_types=1);

namespace StripeSDK\Enums\TaxProduct\ResourceJurisdiction;

enum LevelEnum: string
{
    case City = 'city';
    case Country = 'country';
    case County = 'county';
    case District = 'district';
    case State = 'state';
}
