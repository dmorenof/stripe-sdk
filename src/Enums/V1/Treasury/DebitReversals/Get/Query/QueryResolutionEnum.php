<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Treasury\DebitReversals\Get\Query;

enum QueryResolutionEnum: string
{
    case Lost = 'lost';
    case Won = 'won';
}
