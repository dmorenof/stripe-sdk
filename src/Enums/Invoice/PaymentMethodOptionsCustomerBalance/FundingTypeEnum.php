<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Invoice\PaymentMethodOptionsCustomerBalance;

enum FundingTypeEnum: string
{
    case BankTransfer = 'bank_transfer';
}
