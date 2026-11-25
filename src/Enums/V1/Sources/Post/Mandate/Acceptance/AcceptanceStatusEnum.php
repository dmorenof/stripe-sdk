<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Sources\Post\Mandate\Acceptance;

enum AcceptanceStatusEnum: string
{
    case Accepted = 'accepted';
    case Pending = 'pending';
    case Refused = 'refused';
    case Revoked = 'revoked';
}
