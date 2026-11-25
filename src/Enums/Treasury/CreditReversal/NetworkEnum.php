<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Treasury\CreditReversal;

enum NetworkEnum: string
{
    case Ach = 'ach';
    case Stripe = 'stripe';
}
