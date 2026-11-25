<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Treasury\OutboundPayment;

enum StatusEnum: string
{
    case Canceled = 'canceled';
    case Failed = 'failed';
    case Posted = 'posted';
    case Processing = 'processing';
    case Returned = 'returned';
}
