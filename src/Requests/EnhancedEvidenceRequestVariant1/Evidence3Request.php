<?php

declare(strict_types=1);

namespace StripeSDK\Requests\EnhancedEvidenceRequestVariant1;

/**
 * visa_compelling_evidence3
 */
final class Evidence3Request extends \Dmorenof\SdkRuntime\DTO
{
    public \StripeSDK\Requests\EnhancedEvidenceRequestVariant1\VisaCompellingEvidence3\DisputedTransactionRequest $disputed_transaction;
    public \StripeSDK\Collections\EnhancedEvidenceRequestVariant1\VisaCompellingEvidence3\UndisputedTransactionsCollection $prior_undisputed_transactions;
}
