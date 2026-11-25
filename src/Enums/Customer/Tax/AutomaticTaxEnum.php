<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Customer\Tax;

enum AutomaticTaxEnum: string
{
    case Failed = 'failed';
    case NotCollecting = 'not_collecting';
    case Supported = 'supported';
    case UnrecognizedLocation = 'unrecognized_location';
}
