<?php

declare(strict_types=1);

namespace StripeSDK\Enums\FundingInstructionsBankTransfer;

enum TypeEnum: string
{
    case EuBankTransfer = 'eu_bank_transfer';
    case JpBankTransfer = 'jp_bank_transfer';
}
