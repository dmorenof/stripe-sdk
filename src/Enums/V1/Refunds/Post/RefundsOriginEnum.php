<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Refunds\Post;

enum RefundsOriginEnum: string
{
    case CustomerBalance = 'customer_balance';
}
