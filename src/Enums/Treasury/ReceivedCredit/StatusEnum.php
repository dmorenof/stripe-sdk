<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Treasury\ReceivedCredit;

enum StatusEnum: string
{
    case Failed = 'failed';
    case Succeeded = 'succeeded';
}
