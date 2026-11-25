<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Issuing\CardShipping;

enum ServiceEnum: string
{
    case Express = 'express';
    case Priority = 'priority';
    case Standard = 'standard';
}
