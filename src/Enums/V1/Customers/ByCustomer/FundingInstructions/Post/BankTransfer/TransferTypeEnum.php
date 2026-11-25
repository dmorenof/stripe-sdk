<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\Customers\ByCustomer\FundingInstructions\Post\BankTransfer;

enum TransferTypeEnum: string
{
    case EuBankTransfer = 'eu_bank_transfer';
    case GbBankTransfer = 'gb_bank_transfer';
    case JpBankTransfer = 'jp_bank_transfer';
    case MxBankTransfer = 'mx_bank_transfer';
    case UsBankTransfer = 'us_bank_transfer';
}
