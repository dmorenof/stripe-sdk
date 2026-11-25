<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Treasury\OutboundPaymentsResourceOutboundPaymentResourceTrackingDetails;

enum TypeEnum: string
{
    case Ach = 'ach';
    case UsDomesticWire = 'us_domestic_wire';
}
