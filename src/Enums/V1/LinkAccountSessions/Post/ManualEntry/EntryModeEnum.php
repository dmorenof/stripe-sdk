<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\LinkAccountSessions\Post\ManualEntry;

enum EntryModeEnum: string
{
    case Automatic = 'automatic';
    case Disabled = 'disabled';
}
