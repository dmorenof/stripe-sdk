<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Billing\CreditBalanceSummary\Get\Query\Filter;

enum FilterTypeEnum: string
{
    case ApplicabilityScope = 'applicability_scope';
    case CreditGrant = 'credit_grant';
}
