<?php

declare(strict_types=1);

namespace StripeSDK\Enums\AutomaticTax;

enum DisabledReasonEnum: string
{
    case FinalizationRequiresLocationInputs = 'finalization_requires_location_inputs';
    case FinalizationSystemError = 'finalization_system_error';
}
