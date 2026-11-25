<?php

declare(strict_types=1);

namespace StripeSDK\Enums\ReasonOptionsRequest2Variant1Item;

enum Request2Variant1Enum: string
{
    case CustomerService = 'customer_service';
    case LowQuality = 'low_quality';
    case MissingFeatures = 'missing_features';
    case Other = 'other';
    case SwitchedService = 'switched_service';
    case TooComplex = 'too_complex';
    case TooExpensive = 'too_expensive';
    case Unused = 'unused';
}
