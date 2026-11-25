<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\TestHelpers\Issuing\Authorizations\Post;

enum AuthorizationsWalletEnum: string
{
    case ApplePay = 'apple_pay';
    case GooglePay = 'google_pay';
    case SamsungPay = 'samsung_pay';
}
