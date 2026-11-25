<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Issuing\Cards\Get\Query;

enum QueryTypeEnum: string
{
    case Physical = 'physical';
    case Virtual = 'virtual';
}
