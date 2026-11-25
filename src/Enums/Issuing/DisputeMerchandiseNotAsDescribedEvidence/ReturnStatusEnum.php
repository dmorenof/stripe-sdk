<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Issuing\DisputeMerchandiseNotAsDescribedEvidence;

enum ReturnStatusEnum: string
{
    case MerchantRejected = 'merchant_rejected';
    case Successful = 'successful';
}
