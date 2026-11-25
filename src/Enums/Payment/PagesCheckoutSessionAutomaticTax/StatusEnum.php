<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Payment\PagesCheckoutSessionAutomaticTax;

enum StatusEnum: string
{
    case Complete = 'complete';
    case Failed = 'failed';
    case RequiresLocationInputs = 'requires_location_inputs';
}
