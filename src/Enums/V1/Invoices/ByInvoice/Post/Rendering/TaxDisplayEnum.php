<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Invoices\ByInvoice\Post\Rendering;

enum TaxDisplayEnum: string
{
    case Empty_ = '';
    case ExcludeTax = 'exclude_tax';
    case IncludeInclusiveTax = 'include_inclusive_tax';
}
