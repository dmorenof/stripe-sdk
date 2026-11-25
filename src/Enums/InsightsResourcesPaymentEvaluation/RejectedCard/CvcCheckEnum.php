<?php

declare(strict_types=1);

namespace StripeSDK\Enums\InsightsResourcesPaymentEvaluation\RejectedCard;

enum CvcCheckEnum: string
{
    case Fail = 'fail';
    case Pass = 'pass';
    case Unavailable = 'unavailable';
    case Unchecked = 'unchecked';
}
