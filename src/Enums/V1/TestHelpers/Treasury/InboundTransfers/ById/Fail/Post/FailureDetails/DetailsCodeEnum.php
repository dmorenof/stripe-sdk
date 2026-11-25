<?php

declare(strict_types=1);

namespace StripeSDK\Enums\V1\TestHelpers\Treasury\InboundTransfers\ById\Fail\Post\FailureDetails;

enum DetailsCodeEnum: string
{
    case AccountClosed = 'account_closed';
    case AccountFrozen = 'account_frozen';
    case BankAccountRestricted = 'bank_account_restricted';
    case BankOwnershipChanged = 'bank_ownership_changed';
    case DebitNotAuthorized = 'debit_not_authorized';
    case IncorrectAccountHolderAddress = 'incorrect_account_holder_address';
    case IncorrectAccountHolderName = 'incorrect_account_holder_name';
    case IncorrectAccountHolderTaxId = 'incorrect_account_holder_tax_id';
    case InsufficientFunds = 'insufficient_funds';
    case InvalidAccountNumber = 'invalid_account_number';
    case InvalidCurrency = 'invalid_currency';
    case NoAccount = 'no_account';
    case Other = 'other';
}
