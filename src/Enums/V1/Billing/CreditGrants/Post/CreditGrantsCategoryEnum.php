<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Billing\CreditGrants\Post;

enum CreditGrantsCategoryEnum: string
{
    case Paid = 'paid';
    case Promotional = 'promotional';
}
