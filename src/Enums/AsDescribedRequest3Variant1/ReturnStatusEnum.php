<?php

declare(strict_types=1);

namespace StripeSDK\Enums\AsDescribedRequest3Variant1;

enum ReturnStatusEnum: string
{
    case Empty_ = '';
    case MerchantRejected = 'merchant_rejected';
    case Successful = 'successful';
}
