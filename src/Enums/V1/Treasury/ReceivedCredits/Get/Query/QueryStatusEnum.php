<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Treasury\ReceivedCredits\Get\Query;

enum QueryStatusEnum: string
{
    case Failed = 'failed';
    case Succeeded = 'succeeded';
}
