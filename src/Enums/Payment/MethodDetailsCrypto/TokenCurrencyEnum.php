<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Payment\MethodDetailsCrypto;

enum TokenCurrencyEnum: string
{
    case PhantomCash = 'phantom_cash';
    case Usdc = 'usdc';
    case Usdg = 'usdg';
    case Usdp = 'usdp';
    case Usdsui = 'usdsui';
    case Usdt = 'usdt';
}
