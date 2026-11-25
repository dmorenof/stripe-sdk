<?php

declare(strict_types=1);

namespace StripeSDK\Enums\ThreeDSecureStandaloneResource\Expiry;

enum TypeEnum: string
{
    case Date = 'date';
    case Never_ = 'never';
}
