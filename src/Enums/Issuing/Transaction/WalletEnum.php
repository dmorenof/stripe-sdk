<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Issuing\Transaction;

enum WalletEnum: string
{
    case ApplePay = 'apple_pay';
    case GooglePay = 'google_pay';
    case SamsungPay = 'samsung_pay';
}
