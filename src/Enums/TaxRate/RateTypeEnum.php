<?php

declare(strict_types=1);

namespace StripeSDK\Enums\TaxRate;

enum RateTypeEnum: string
{
    case FlatAmount = 'flat_amount';
    case Percentage = 'percentage';
}
