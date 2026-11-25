<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Setup\AttemptPaymentMethodDetailsCardWallet;

enum TypeEnum: string
{
    case ApplePay = 'apple_pay';
    case GooglePay = 'google_pay';
    case Link = 'link';
}
