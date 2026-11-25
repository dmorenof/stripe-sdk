<?php

declare(strict_types=1);

namespace StripeSDK\Enums\MandateDataRequest2Variant1\CustomerAcceptance;

enum AcceptanceTypeEnum: string
{
    case Offline = 'offline';
    case Online = 'online';
}
