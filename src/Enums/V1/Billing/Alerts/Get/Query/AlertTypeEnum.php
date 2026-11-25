<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Billing\Alerts\Get\Query;

enum AlertTypeEnum: string
{
    case UsageThreshold = 'usage_threshold';
}
