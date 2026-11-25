<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\SetupIntents\Post\PaymentMethodOptions\AcssDebit;

enum DebitCurrencyEnum: string
{
    case Cad = 'cad';
    case Usd = 'usd';
}
