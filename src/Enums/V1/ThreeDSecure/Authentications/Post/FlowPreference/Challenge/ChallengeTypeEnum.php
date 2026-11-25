<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\ThreeDSecure\Authentications\Post\FlowPreference\Challenge;

enum ChallengeTypeEnum: string
{
    case Mandated = 'mandated';
    case Preferred = 'preferred';
}
