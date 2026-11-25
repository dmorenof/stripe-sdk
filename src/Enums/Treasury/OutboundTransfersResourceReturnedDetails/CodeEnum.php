<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Treasury\OutboundTransfersResourceReturnedDetails;

enum CodeEnum: string
{
    case AccountClosed = 'account_closed';
    case AccountFrozen = 'account_frozen';
    case BankAccountRestricted = 'bank_account_restricted';
    case BankOwnershipChanged = 'bank_ownership_changed';
    case Declined = 'declined';
    case IncorrectAccountHolderName = 'incorrect_account_holder_name';
    case InvalidAccountNumber = 'invalid_account_number';
    case InvalidCurrency = 'invalid_currency';
    case NoAccount = 'no_account';
    case Other = 'other';
}
