<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\FinancialConnections\Sessions\Post\Filters;

enum MethodSupportEnum: string
{
    case All = 'all';
    case AtLeastOne = 'at_least_one';
    case None = 'none';
}
