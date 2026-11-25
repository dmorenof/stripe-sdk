<?php

declare(strict_types=1);

namespace StripeSDK\Enums\BankConnectionsResource\LinkAccountSessionManualEntry;

enum ModeEnum: string
{
    case Automatic = 'automatic';
    case Disabled = 'disabled';
}
