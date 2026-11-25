<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Customer\CashBalanceTransaction;

enum TypeEnum: string
{
    case AdjustedForOverdraft = 'adjusted_for_overdraft';
    case AppliedToPayment = 'applied_to_payment';
    case Funded = 'funded';
    case FundingReversed = 'funding_reversed';
    case RefundedFromPayment = 'refunded_from_payment';
    case ReturnCanceled = 'return_canceled';
    case ReturnInitiated = 'return_initiated';
    case TransferredToBalance = 'transferred_to_balance';
    case UnappliedFromPayment = 'unapplied_from_payment';
}
