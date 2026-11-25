<?php

declare(strict_types=1);

namespace StripeSDK\Enums\ThreeDSecureStandaloneResource\FlowPreference;

enum TypeEnum: string
{
    case Challenge = 'challenge';
    case DataShare = 'data_share';
    case Frictionless = 'frictionless';
}
