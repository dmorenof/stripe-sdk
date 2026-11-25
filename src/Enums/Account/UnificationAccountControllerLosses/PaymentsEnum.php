<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Account\UnificationAccountControllerLosses;

enum PaymentsEnum: string
{
    case Application = 'application';
    case Stripe = 'stripe';
}
