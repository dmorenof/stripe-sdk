<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Issuing\Transaction;

enum TypeEnum: string
{
    case Capture = 'capture';
    case Refund = 'refund';
}
