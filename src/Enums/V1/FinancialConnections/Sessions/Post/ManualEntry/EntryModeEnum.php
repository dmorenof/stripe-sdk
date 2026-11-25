<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\FinancialConnections\Sessions\Post\ManualEntry;

enum EntryModeEnum: string
{
    case Automatic = 'automatic';
    case Disabled = 'disabled';
}
