<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Tax\Transaction;

enum TypeEnum: string
{
    case Reversal = 'reversal';
    case Transaction = 'transaction';
}
