<?php

declare(strict_types=1);

namespace StripeSDK\Enums\InsightsResourcesPaymentEvaluation\SignalV2;

enum RiskLevelEnum: string
{
    case Elevated = 'elevated';
    case Highest = 'highest';
    case Low = 'low';
    case Normal = 'normal';
    case NotAssessed = 'not_assessed';
    case Unknown = 'unknown';
}
