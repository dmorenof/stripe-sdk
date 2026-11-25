<?php

declare(strict_types=1);

namespace StripeSDK\Enums\ThreeDSecureStandaloneResource\ThreeRiDetails;

enum TypeEnum: string
{
    case DelayedShipment = 'delayed_shipment';
    case OtherPayment = 'other_payment';
    case Recurring = 'recurring';
    case SplitShipment = 'split_shipment';
}
