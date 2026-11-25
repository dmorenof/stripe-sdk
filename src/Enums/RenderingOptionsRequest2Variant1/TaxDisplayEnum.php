<?php

declare(strict_types=1);

namespace StripeSDK\Enums\RenderingOptionsRequest2Variant1;

enum TaxDisplayEnum: string
{
    case Empty_ = '';
    case ExcludeTax = 'exclude_tax';
    case IncludeInclusiveTax = 'include_inclusive_tax';
}
