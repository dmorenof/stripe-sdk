<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\TestHelpers\Issuing\Authorizations\Post\VerificationData\AuthenticationExemption;

enum ClaimedByEnum: string
{
    case Acquirer = 'acquirer';
    case Issuer = 'issuer';
}
