<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Treasury\Transaction;

enum StatusEnum: string
{
    case Open = 'open';
    case Posted = 'posted';
    case Void_ = 'void';
}
