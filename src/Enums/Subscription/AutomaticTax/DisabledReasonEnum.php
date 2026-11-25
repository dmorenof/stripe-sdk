<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Subscription\AutomaticTax;

enum DisabledReasonEnum: string
{
    case RequiresLocationInputs = 'requires_location_inputs';
}
