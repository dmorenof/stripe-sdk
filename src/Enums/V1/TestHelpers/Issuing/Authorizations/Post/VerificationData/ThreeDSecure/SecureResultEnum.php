<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\TestHelpers\Issuing\Authorizations\Post\VerificationData\ThreeDSecure;

enum SecureResultEnum: string
{
    case AttemptAcknowledged = 'attempt_acknowledged';
    case Authenticated = 'authenticated';
    case Failed = 'failed';
    case Required = 'required';
}
