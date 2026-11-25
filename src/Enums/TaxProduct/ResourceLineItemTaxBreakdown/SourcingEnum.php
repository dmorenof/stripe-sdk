<?php

declare(strict_types=1);

namespace StripeSDK\Enums\TaxProduct\ResourceLineItemTaxBreakdown;

enum SourcingEnum: string
{
    case Destination = 'destination';
    case Origin = 'origin';
    case Performance = 'performance';
}
