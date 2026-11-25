<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Mandate\BacsDebit;

enum RevocationReasonEnum: string
{
    case AccountClosed = 'account_closed';
    case BankAccountRestricted = 'bank_account_restricted';
    case BankOwnershipChanged = 'bank_ownership_changed';
    case CouldNotProcess = 'could_not_process';
    case DebitNotAuthorized = 'debit_not_authorized';
}
