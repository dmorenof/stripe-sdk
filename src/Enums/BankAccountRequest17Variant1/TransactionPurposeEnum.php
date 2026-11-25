<?php

declare(strict_types=1);

namespace StripeSDK\Enums\BankAccountRequest17Variant1;

enum TransactionPurposeEnum: string
{
    case Empty_ = '';
    case Goods = 'goods';
    case Other = 'other';
    case Services = 'services';
    case Unspecified = 'unspecified';
}
