<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\ThreeDSecure\Authentications\Post\FlowPreference\Frictionless;

enum FrictionlessTypeEnum: string
{
    case LowRisk = 'low_risk';
    case None = 'none';
}
