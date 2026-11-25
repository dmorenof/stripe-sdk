<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Issuing\AuthorizationAuthenticationExemption;

enum ClaimedByEnum: string
{
    case Acquirer = 'acquirer';
    case Issuer = 'issuer';
}
