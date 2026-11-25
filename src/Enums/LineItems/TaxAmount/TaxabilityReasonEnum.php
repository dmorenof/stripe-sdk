<?php

declare(strict_types=1);

namespace StripeSDK\Enums\LineItems\TaxAmount;

enum TaxabilityReasonEnum: string
{
    case CustomerExempt = 'customer_exempt';
    case NotCollecting = 'not_collecting';
    case NotSubjectToTax = 'not_subject_to_tax';
    case NotSupported = 'not_supported';
    case PortionProductExempt = 'portion_product_exempt';
    case PortionReducedRated = 'portion_reduced_rated';
    case PortionStandardRated = 'portion_standard_rated';
    case ProductExempt = 'product_exempt';
    case ProductExemptHoliday = 'product_exempt_holiday';
    case ProportionallyRated = 'proportionally_rated';
    case ReducedRated = 'reduced_rated';
    case ReverseCharge = 'reverse_charge';
    case StandardRated = 'standard_rated';
    case TaxableBasisReduced = 'taxable_basis_reduced';
    case ZeroRated = 'zero_rated';
}
