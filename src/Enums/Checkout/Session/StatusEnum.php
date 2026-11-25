<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Checkout\Session;

enum StatusEnum: string
{
    case Complete = 'complete';
    case Expired = 'expired';
    case Open = 'open';
}
