<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\TestHelpers\Issuing\Authorizations\Post\RiskAssessment\FraudRisk;

enum RiskLevelEnum: string
{
    case Elevated = 'elevated';
    case Highest = 'highest';
    case Low = 'low';
    case Normal = 'normal';
    case NotAssessed = 'not_assessed';
    case Unknown = 'unknown';
}
