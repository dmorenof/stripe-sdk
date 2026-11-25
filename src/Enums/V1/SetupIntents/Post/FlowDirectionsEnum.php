<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\SetupIntents\Post;

enum FlowDirectionsEnum: string
{
    case Inbound = 'inbound';
    case Outbound = 'outbound';
}
