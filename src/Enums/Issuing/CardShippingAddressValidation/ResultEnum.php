<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Issuing\CardShippingAddressValidation;

enum ResultEnum: string
{
    case Indeterminate = 'indeterminate';
    case LikelyDeliverable = 'likely_deliverable';
    case LikelyUndeliverable = 'likely_undeliverable';
}
