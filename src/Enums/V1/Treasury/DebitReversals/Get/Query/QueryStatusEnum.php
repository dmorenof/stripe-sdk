<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Treasury\DebitReversals\Get\Query;

enum QueryStatusEnum: string
{
    case Canceled = 'canceled';
    case Completed = 'completed';
    case Processing = 'processing';
}
