<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Issuing\Cardholders\Get\Query;

enum QueryTypeEnum: string
{
    case Company = 'company';
    case Individual = 'individual';
}
