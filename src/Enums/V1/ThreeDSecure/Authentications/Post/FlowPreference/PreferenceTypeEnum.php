<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\ThreeDSecure\Authentications\Post\FlowPreference;

enum PreferenceTypeEnum: string
{
    case Challenge = 'challenge';
    case DataShare = 'data_share';
    case Frictionless = 'frictionless';
}
