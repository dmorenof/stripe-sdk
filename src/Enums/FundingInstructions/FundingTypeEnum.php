<?php

declare(strict_types=1);

namespace StripeSDK\Enums\FundingInstructions;

enum FundingTypeEnum: string
{
    case BankTransfer = 'bank_transfer';
}
