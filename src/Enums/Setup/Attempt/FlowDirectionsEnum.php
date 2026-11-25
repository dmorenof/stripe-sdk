<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Setup\Attempt;

enum FlowDirectionsEnum: string
{
    case Inbound = 'inbound';
    case Outbound = 'outbound';
}
