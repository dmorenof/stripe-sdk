<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Customer\BalanceResourceCashBalanceTransactionResourceFundedTransactionResourceBankTransferResourceUsBankTransfer;

enum NetworkEnum: string
{
    case Ach = 'ach';
    case DomesticWireUs = 'domestic_wire_us';
    case Swift = 'swift';
}
