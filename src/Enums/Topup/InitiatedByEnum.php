<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Topup;

enum InitiatedByEnum: string
{
    case Stripe = 'stripe';
    case User = 'user';
}
