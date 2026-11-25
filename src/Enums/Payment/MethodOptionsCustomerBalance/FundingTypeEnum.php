<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Payment\MethodOptionsCustomerBalance;

enum FundingTypeEnum: string
{
    case BankTransfer = 'bank_transfer';
}
