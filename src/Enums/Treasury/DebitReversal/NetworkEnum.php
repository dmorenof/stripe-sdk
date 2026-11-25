<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Treasury\DebitReversal;

enum NetworkEnum: string
{
    case Ach = 'ach';
    case Card = 'card';
}
