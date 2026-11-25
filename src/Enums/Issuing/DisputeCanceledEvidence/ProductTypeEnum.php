<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Issuing\DisputeCanceledEvidence;

enum ProductTypeEnum: string
{
    case Merchandise = 'merchandise';
    case Service = 'service';
}
