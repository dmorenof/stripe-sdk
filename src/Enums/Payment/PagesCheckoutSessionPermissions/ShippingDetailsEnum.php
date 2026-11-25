<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Payment\PagesCheckoutSessionPermissions;

enum ShippingDetailsEnum: string
{
    case ClientOnly = 'client_only';
    case ServerOnly = 'server_only';
}
