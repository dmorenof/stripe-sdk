<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Payment\AttemptRecord;

enum CustomerPresenceEnum: string
{
    case OffSession = 'off_session';
    case OnSession = 'on_session';
}
