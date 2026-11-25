<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Dispute;

/**
 * DisputeEnhancedEvidenceVisaCompellingEvidence3
 */
final class EnhancedEvidenceVisaCompellingEvidence3 extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'prior_undisputed_transactions',
    ];

    /**
     * Disputed transaction details for Visa Compelling Evidence 3.0 evidence submission.
     */
    public ?\StripeSDK\DTOs\Dispute\VisaCompellingEvidence3DisputedTransaction $disputed_transaction;
    /**
     * List of exactly two prior undisputed transaction objects for Visa Compelling Evidence 3.0 evidence submission.
     */
    public \StripeSDK\Collections\Dispute\EnhancedEvidenceVisaCompellingEvidence3\UndisputedTransactionsCollection $prior_undisputed_transactions;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'disputed_transaction' => $value === null || $value instanceof \stdClass ? $this->disputed_transaction = $value === null ? null : new \StripeSDK\DTOs\Dispute\VisaCompellingEvidence3DisputedTransaction($value) : parent::assignMember($name, $value),
            'prior_undisputed_transactions' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->prior_undisputed_transactions = new \StripeSDK\Collections\Dispute\EnhancedEvidenceVisaCompellingEvidence3\UndisputedTransactionsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \StripeSDK\DTOs\Dispute\VisaCompellingEvidence3PriorUndisputedTransaction::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
