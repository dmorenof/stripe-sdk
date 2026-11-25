<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Accounts\ByAccount\Post\Settings\PaypayPayments;

enum GoodsTypeEnum: string
{
    case DigitalContent = 'digital_content';
    case Other = 'other';
}
