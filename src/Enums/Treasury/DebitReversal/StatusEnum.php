<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Treasury\DebitReversal;

enum StatusEnum: string
{
    case Failed = 'failed';
    case Processing = 'processing';
    case Succeeded = 'succeeded';
}
