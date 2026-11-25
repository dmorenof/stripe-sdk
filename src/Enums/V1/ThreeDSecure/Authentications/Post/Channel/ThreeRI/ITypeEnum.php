<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\ThreeDSecure\Authentications\Post\Channel\ThreeRI;

enum ITypeEnum: string
{
    case DelayedShipment = 'delayed_shipment';
    case OtherPayment = 'other_payment';
    case Recurring = 'recurring';
    case SplitShipment = 'split_shipment';
}
