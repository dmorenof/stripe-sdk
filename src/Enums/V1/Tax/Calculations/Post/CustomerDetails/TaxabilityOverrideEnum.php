<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Tax\Calculations\Post\CustomerDetails;

enum TaxabilityOverrideEnum: string
{
    case CustomerExempt = 'customer_exempt';
    case None = 'none';
    case ReverseCharge = 'reverse_charge';
}
