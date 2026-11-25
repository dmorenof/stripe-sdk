<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Checkout\Session;

enum ModeEnum: string
{
    case Payment = 'payment';
    case Setup = 'setup';
    case Subscription = 'subscription';
}
