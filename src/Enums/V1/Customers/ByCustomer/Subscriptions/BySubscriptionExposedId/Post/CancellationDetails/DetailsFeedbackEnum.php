<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Customers\ByCustomer\Subscriptions\BySubscriptionExposedId\Post\CancellationDetails;

enum DetailsFeedbackEnum: string
{
    case Empty_ = '';
    case CustomerService = 'customer_service';
    case LowQuality = 'low_quality';
    case MissingFeatures = 'missing_features';
    case Other = 'other';
    case SwitchedService = 'switched_service';
    case TooComplex = 'too_complex';
    case TooExpensive = 'too_expensive';
    case Unused = 'unused';
}
