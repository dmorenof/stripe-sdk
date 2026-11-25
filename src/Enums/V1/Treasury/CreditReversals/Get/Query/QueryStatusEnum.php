<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Treasury\CreditReversals\Get\Query;

enum QueryStatusEnum: string
{
    case Canceled = 'canceled';
    case Posted = 'posted';
    case Processing = 'processing';
}
