<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Issuing\Cards\ByCard\Post\Shipping;

enum ShippingServiceEnum: string
{
    case Express = 'express';
    case Priority = 'priority';
    case Standard = 'standard';
}
