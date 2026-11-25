<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Issuing\DisputeNotReceivedEvidence;

enum ProductTypeEnum: string
{
    case Merchandise = 'merchandise';
    case Service = 'service';
}
