<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Payment\MethodOptionsCustomerBalanceBankTransfer;

enum AddressTypesEnum: string
{
    case Aba = 'aba';
    case Iban = 'iban';
    case Sepa = 'sepa';
    case SortCode = 'sort_code';
    case Spei = 'spei';
    case Swift = 'swift';
    case Zengin = 'zengin';
}
