<?php

declare(strict_types=1);

namespace StripeSDK\Enums\MandateDataRequestVariant1\CustomerAcceptance;

enum AcceptanceTypeEnum: string
{
    case Offline = 'offline';
    case Online = 'online';
}
