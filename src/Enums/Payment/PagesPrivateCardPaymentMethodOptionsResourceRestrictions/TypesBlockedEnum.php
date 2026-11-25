<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Payment\PagesPrivateCardPaymentMethodOptionsResourceRestrictions;

enum TypesBlockedEnum: string
{
    case Credit = 'credit';
    case Debit = 'debit';
    case Prepaid = 'prepaid';
}
