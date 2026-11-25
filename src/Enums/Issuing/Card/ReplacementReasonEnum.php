<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Issuing\Card;

enum ReplacementReasonEnum: string
{
    case Damaged = 'damaged';
    case Expired = 'expired';
    case FulfillmentError = 'fulfillment_error';
    case Lost = 'lost';
    case Stolen = 'stolen';
}
