<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Treasury\ReceivedDebit;

enum NetworkEnum: string
{
    case Ach = 'ach';
    case Card = 'card';
    case Stripe = 'stripe';
}
