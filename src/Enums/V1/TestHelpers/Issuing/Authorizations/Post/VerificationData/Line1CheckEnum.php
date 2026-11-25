<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\TestHelpers\Issuing\Authorizations\Post\VerificationData;

enum Line1CheckEnum: string
{
    case Match_ = 'match';
    case Mismatch = 'mismatch';
    case NotProvided = 'not_provided';
}
