<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Payment\MethodCardWallet;

enum TypeEnum: string
{
    case AmexExpressCheckout = 'amex_express_checkout';
    case ApplePay = 'apple_pay';
    case GooglePay = 'google_pay';
    case Link = 'link';
    case Masterpass = 'masterpass';
    case SamsungPay = 'samsung_pay';
    case VisaCheckout = 'visa_checkout';
}
