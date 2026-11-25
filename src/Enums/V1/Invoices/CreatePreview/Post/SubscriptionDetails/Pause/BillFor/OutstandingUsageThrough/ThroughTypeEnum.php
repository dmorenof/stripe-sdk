<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Invoices\CreatePreview\Post\SubscriptionDetails\Pause\BillFor\OutstandingUsageThrough;

enum ThroughTypeEnum: string
{
    case None = 'none';
    case Now = 'now';
}
