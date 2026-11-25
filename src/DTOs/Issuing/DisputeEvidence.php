<?php

declare(strict_types=1);

namespace StripeSDK\DTOs\Issuing;

/**
 * IssuingDisputeEvidence
 */
final class DisputeEvidence extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'reason',
    ];

    public \StripeSDK\DTOs\Issuing\DisputeCanceledEvidence $canceled;
    public \StripeSDK\DTOs\Issuing\DisputeDuplicateEvidence $duplicate;
    public \StripeSDK\DTOs\Issuing\DisputeFraudulentEvidence $fraudulent;
    public \StripeSDK\DTOs\Issuing\DisputeMerchandiseNotAsDescribedEvidence $merchandise_not_as_described;
    public \StripeSDK\DTOs\Issuing\DisputeNoValidAuthorizationEvidence $no_valid_authorization;
    public \StripeSDK\DTOs\Issuing\DisputeNotReceivedEvidence $not_received;
    public \StripeSDK\DTOs\Issuing\DisputeOtherEvidence $other;
    /**
     * The reason for filing the dispute. Its value will match the field containing the evidence.
     */
    public \StripeSDK\Enums\Issuing\DisputeEvidence\ReasonEnum $reason;
    public \StripeSDK\DTOs\Issuing\DisputeServiceNotAsDescribedEvidence $service_not_as_described;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'canceled' => $value instanceof \stdClass ? $this->canceled = new \StripeSDK\DTOs\Issuing\DisputeCanceledEvidence($value) : parent::assignMember($name, $value),
            'duplicate' => $value instanceof \stdClass ? $this->duplicate = new \StripeSDK\DTOs\Issuing\DisputeDuplicateEvidence($value) : parent::assignMember($name, $value),
            'fraudulent' => $value instanceof \stdClass ? $this->fraudulent = new \StripeSDK\DTOs\Issuing\DisputeFraudulentEvidence($value) : parent::assignMember($name, $value),
            'merchandise_not_as_described' => $value instanceof \stdClass ? $this->merchandise_not_as_described = new \StripeSDK\DTOs\Issuing\DisputeMerchandiseNotAsDescribedEvidence($value) : parent::assignMember($name, $value),
            'no_valid_authorization' => $value instanceof \stdClass ? $this->no_valid_authorization = new \StripeSDK\DTOs\Issuing\DisputeNoValidAuthorizationEvidence($value) : parent::assignMember($name, $value),
            'not_received' => $value instanceof \stdClass ? $this->not_received = new \StripeSDK\DTOs\Issuing\DisputeNotReceivedEvidence($value) : parent::assignMember($name, $value),
            'other' => $value instanceof \stdClass ? $this->other = new \StripeSDK\DTOs\Issuing\DisputeOtherEvidence($value) : parent::assignMember($name, $value),
            'reason' => is_string($value) ? $this->reason = \StripeSDK\Enums\Issuing\DisputeEvidence\ReasonEnum::from($value) : parent::assignMember($name, $value),
            'service_not_as_described' => $value instanceof \stdClass ? $this->service_not_as_described = new \StripeSDK\DTOs\Issuing\DisputeServiceNotAsDescribedEvidence($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
