<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Checkout\Sessions\Post\PaymentMethodOptions\Card\Restrictions;

enum TypesBlockedEnum: string
{
    case Credit = 'credit';
    case Debit = 'debit';
    case Prepaid = 'prepaid';
}
