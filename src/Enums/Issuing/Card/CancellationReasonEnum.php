<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Issuing\Card;

enum CancellationReasonEnum: string
{
    case DesignRejected = 'design_rejected';
    case FulfillmentError = 'fulfillment_error';
    case Lost = 'lost';
    case Stolen = 'stolen';
}
