<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Mandate\BacsDebit;

enum NetworkStatusEnum: string
{
    case Accepted = 'accepted';
    case Pending = 'pending';
    case Refused = 'refused';
    case Revoked = 'revoked';
}
