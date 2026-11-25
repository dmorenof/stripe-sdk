<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Issuing\AuthorizationFraudChallenge;

enum UndeliverableReasonEnum: string
{
    case NoPhoneNumber = 'no_phone_number';
    case UnsupportedPhoneNumber = 'unsupported_phone_number';
}
