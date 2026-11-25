<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Checkout\Sessions\Post\Permissions;

enum ShippingDetailsEnum: string
{
    case ClientOnly = 'client_only';
    case ServerOnly = 'server_only';
}
