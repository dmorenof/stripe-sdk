<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Issuing\DisputeOtherEvidence;

enum ProductTypeEnum: string
{
    case Merchandise = 'merchandise';
    case Service = 'service';
}
