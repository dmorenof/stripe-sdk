<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Payout;

enum ReconciliationStatusEnum: string
{
    case Completed = 'completed';
    case InProgress = 'in_progress';
    case NotApplicable = 'not_applicable';
}
