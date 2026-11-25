<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Treasury\ReceivedDebit;

enum StatusEnum: string
{
    case Failed = 'failed';
    case Succeeded = 'succeeded';
}
