<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\SetupIntents\ByIntent\Confirm\Post\PaymentMethodOptions\AcssDebit;

enum DebitCurrencyEnum: string
{
    case Cad = 'cad';
    case Usd = 'usd';
}
