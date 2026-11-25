<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Prices\Get\Query;

enum QueryTypeEnum: string
{
    case OneTime = 'one_time';
    case Recurring = 'recurring';
}
