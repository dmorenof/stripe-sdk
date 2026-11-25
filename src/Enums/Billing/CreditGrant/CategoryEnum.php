<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Billing\CreditGrant;

enum CategoryEnum: string
{
    case Paid = 'paid';
    case Promotional = 'promotional';
}
