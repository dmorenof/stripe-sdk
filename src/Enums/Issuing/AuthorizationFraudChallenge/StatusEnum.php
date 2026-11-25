<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Issuing\AuthorizationFraudChallenge;

enum StatusEnum: string
{
    case Expired = 'expired';
    case Pending = 'pending';
    case Rejected = 'rejected';
    case Undeliverable = 'undeliverable';
    case Verified = 'verified';
}
