<?php

declare(strict_types=1);

namespace StripeSDK\Enums\RefundDestinationDetails\Card;

enum TypeEnum: string
{
    case Pending = 'pending';
    case Refund = 'refund';
    case Reversal = 'reversal';
}
