<?php

declare(strict_types=1);

namespace StripeSDK\Enums\TaxCodeRequirements;

enum PerformanceLocationEnum: string
{
    case Optional = 'optional';
    case Required = 'required';
}
