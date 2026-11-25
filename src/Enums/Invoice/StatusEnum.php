<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Invoice;

enum StatusEnum: string
{
    case Draft = 'draft';
    case Open = 'open';
    case Paid = 'paid';
    case Uncollectible = 'uncollectible';
    case Void_ = 'void';
}
