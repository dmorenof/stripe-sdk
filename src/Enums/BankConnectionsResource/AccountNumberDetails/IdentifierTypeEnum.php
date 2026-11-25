<?php

declare(strict_types=1);

namespace StripeSDK\Enums\BankConnectionsResource\AccountNumberDetails;

enum IdentifierTypeEnum: string
{
    case AccountNumber = 'account_number';
    case TokenizedAccountNumber = 'tokenized_account_number';
}
