<?php

declare(strict_types=1);

namespace StripeSDK\Enums\TaxProduct\ResourceCustomerDetails;

enum TaxabilityOverrideEnum: string
{
    case CustomerExempt = 'customer_exempt';
    case None = 'none';
    case ReverseCharge = 'reverse_charge';
}
