<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Issuing\AuthorizationVerificationData;

enum CvcCheckEnum: string
{
    case Match_ = 'match';
    case Mismatch = 'mismatch';
    case NotProvided = 'not_provided';
}
