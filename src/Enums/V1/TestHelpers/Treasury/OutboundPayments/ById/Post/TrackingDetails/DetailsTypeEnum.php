<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\TestHelpers\Treasury\OutboundPayments\ById\Post\TrackingDetails;

enum DetailsTypeEnum: string
{
    case Ach = 'ach';
    case UsDomesticWire = 'us_domestic_wire';
}
