<?php

declare(strict_types=1);

namespace StripeSDK\Enums\ThreeDSecureStandaloneResource\ChallengeDetails;

enum TypeEnum: string
{
    case Mandated = 'mandated';
    case Preferred = 'preferred';
}
