<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Treasury\InboundTransfer;

enum StatusEnum: string
{
    case Canceled = 'canceled';
    case Failed = 'failed';
    case Processing = 'processing';
    case Succeeded = 'succeeded';
}
