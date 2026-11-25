<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Dispute;

/**
 * DisputeEvidenceDetails
 */
final class EvidenceDetails extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'enhanced_eligibility',
        'has_evidence',
        'past_due',
        'submission_count',
    ];

    /**
     * Date by which evidence must be submitted in order to successfully challenge dispute. Will be 0 if the customer's bank or credit card company doesn't allow a response for this particular dispute.
     * Format: unix-time
     */
    public ?int $due_by;
    public \StripeSDK\DTOs\Dispute\EnhancedEligibility $enhanced_eligibility;
    /**
     * Whether evidence has been staged for this dispute.
     */
    public bool $has_evidence;
    /**
     * Whether the last evidence submission was submitted past the due date. Defaults to `false` if no evidence submissions have occurred. If `true`, then delivery of the latest evidence is *not* guaranteed.
     */
    public bool $past_due;
    /**
     * The number of times evidence has been submitted. Typically, you may only submit evidence once.
     */
    public int $submission_count;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'due_by' => $value === null || is_int($value) ? $this->due_by = $value : parent::assignMember($name, $value),
            'enhanced_eligibility' => $value instanceof \stdClass ? $this->enhanced_eligibility = new \StripeSDK\DTOs\Dispute\EnhancedEligibility($value) : parent::assignMember($name, $value),
            'has_evidence' => is_bool($value) ? $this->has_evidence = $value : parent::assignMember($name, $value),
            'past_due' => is_bool($value) ? $this->past_due = $value : parent::assignMember($name, $value),
            'submission_count' => is_int($value) ? $this->submission_count = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
