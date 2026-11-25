<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Payment\FlowsPrivatePaymentMethodsCardPresentCommonWallet;

enum TypeEnum: string
{
    case ApplePay = 'apple_pay';
    case GooglePay = 'google_pay';
    case SamsungPay = 'samsung_pay';
    case Unknown = 'unknown';
}
