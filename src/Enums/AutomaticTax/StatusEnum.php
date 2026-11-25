<?php

declare(strict_types=1);

namespace StripeSDK\Enums\AutomaticTax;

enum StatusEnum: string
{
    case Complete = 'complete';
    case Failed = 'failed';
    case RequiresLocationInputs = 'requires_location_inputs';
}
