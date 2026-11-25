<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Treasury\ReceivedCredit;

enum NetworkEnum: string
{
    case Ach = 'ach';
    case Card = 'card';
    case Rtp = 'rtp';
    case Stripe = 'stripe';
    case UsDomesticWire = 'us_domestic_wire';
}
