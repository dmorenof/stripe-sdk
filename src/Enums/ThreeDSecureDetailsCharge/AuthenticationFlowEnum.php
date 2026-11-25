<?php

declare(strict_types=1);

namespace StripeSDK\Enums\ThreeDSecureDetailsCharge;

enum AuthenticationFlowEnum: string
{
    case Challenge = 'challenge';
    case Frictionless = 'frictionless';
}
