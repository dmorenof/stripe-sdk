<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Issuing\DisputeCanceledEvidence;

enum ReturnStatusEnum: string
{
    case MerchantRejected = 'merchant_rejected';
    case Successful = 'successful';
}
