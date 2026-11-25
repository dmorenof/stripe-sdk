<?php

declare(strict_types=1);

namespace StripeSDK\Enums\Dispute\EnhancedEligibilityVisaCompellingEvidence3;

enum RequiredActionsEnum: string
{
    case MissingCustomerIdentifiers = 'missing_customer_identifiers';
    case MissingDisputedTransactionDescription = 'missing_disputed_transaction_description';
    case MissingMerchandiseOrServices = 'missing_merchandise_or_services';
    case MissingPriorUndisputedTransactionDescription = 'missing_prior_undisputed_transaction_description';
    case MissingPriorUndisputedTransactions = 'missing_prior_undisputed_transactions';
}
