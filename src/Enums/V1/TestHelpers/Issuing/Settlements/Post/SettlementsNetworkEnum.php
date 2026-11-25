<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\TestHelpers\Issuing\Settlements\Post;

enum SettlementsNetworkEnum: string
{
    case Maestro = 'maestro';
    case Visa = 'visa';
}
