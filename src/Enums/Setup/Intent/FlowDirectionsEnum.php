<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Setup\Intent;

enum FlowDirectionsEnum: string
{
    case Inbound = 'inbound';
    case Outbound = 'outbound';
}
