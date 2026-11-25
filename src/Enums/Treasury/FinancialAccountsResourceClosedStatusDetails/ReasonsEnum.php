<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Treasury\FinancialAccountsResourceClosedStatusDetails;

enum ReasonsEnum: string
{
    case AccountRejected = 'account_rejected';
    case ClosedByPlatform = 'closed_by_platform';
    case Other = 'other';
}
