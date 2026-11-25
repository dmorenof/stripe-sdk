<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Checkout\Sessions\Post\PaymentMethodOptions\AcssDebit;

enum DebitCurrencyEnum: string
{
    case Cad = 'cad';
    case Usd = 'usd';
}
