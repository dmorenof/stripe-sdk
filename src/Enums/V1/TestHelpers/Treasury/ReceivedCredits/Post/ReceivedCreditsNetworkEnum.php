<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\TestHelpers\Treasury\ReceivedCredits\Post;

enum ReceivedCreditsNetworkEnum: string
{
    case Ach = 'ach';
    case Rtp = 'rtp';
    case UsDomesticWire = 'us_domestic_wire';
}
