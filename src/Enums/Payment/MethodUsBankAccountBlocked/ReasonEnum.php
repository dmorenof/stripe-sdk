<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Payment\MethodUsBankAccountBlocked;

enum ReasonEnum: string
{
    case BankAccountClosed = 'bank_account_closed';
    case BankAccountFrozen = 'bank_account_frozen';
    case BankAccountInvalidDetails = 'bank_account_invalid_details';
    case BankAccountRestricted = 'bank_account_restricted';
    case BankAccountUnusable = 'bank_account_unusable';
    case DebitNotAuthorized = 'debit_not_authorized';
    case TokenizedAccountNumberDeactivated = 'tokenized_account_number_deactivated';
}
