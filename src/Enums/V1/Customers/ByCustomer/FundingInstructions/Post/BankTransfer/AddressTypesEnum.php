<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Customers\ByCustomer\FundingInstructions\Post\BankTransfer;

enum AddressTypesEnum: string
{
    case Iban = 'iban';
    case SortCode = 'sort_code';
    case Spei = 'spei';
    case Zengin = 'zengin';
}
