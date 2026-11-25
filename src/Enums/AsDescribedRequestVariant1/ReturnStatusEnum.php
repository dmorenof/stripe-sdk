<?php

declare(strict_types=1);

namespace StripeSDK\Enums\AsDescribedRequestVariant1;

enum ReturnStatusEnum: string
{
    case Empty_ = '';
    case MerchantRejected = 'merchant_rejected';
    case Successful = 'successful';
}
