<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Issuing\AuthorizationThreeDSecure;

enum ResultEnum: string
{
    case AttemptAcknowledged = 'attempt_acknowledged';
    case Authenticated = 'authenticated';
    case Failed = 'failed';
    case Required = 'required';
}
