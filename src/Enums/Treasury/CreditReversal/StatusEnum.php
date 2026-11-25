<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Treasury\CreditReversal;

enum StatusEnum: string
{
    case Canceled = 'canceled';
    case Posted = 'posted';
    case Processing = 'processing';
}
