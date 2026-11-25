<?php

declare(strict_types=1);

namespace StripeSDK\Enums\FundingInstructionsBankTransfer\FinancialAddress;

enum TypeEnum: string
{
    case Aba = 'aba';
    case Iban = 'iban';
    case SortCode = 'sort_code';
    case Spei = 'spei';
    case Swift = 'swift';
    case Zengin = 'zengin';
}
