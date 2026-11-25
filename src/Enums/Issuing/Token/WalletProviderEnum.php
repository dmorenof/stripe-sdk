<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Issuing\Token;

enum WalletProviderEnum: string
{
    case ApplePay = 'apple_pay';
    case GooglePay = 'google_pay';
    case SamsungPay = 'samsung_pay';
}
